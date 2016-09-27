<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DomCrawler\Crawler;
use CoreBundle\Entity\Film;
use CoreBundle\Entity\Serie;
use CoreBundle\Entity\Episode;
use Transmission\Transmission;

class CoreController extends Controller
{
    public function autoComplete()
    {
        $db = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Film');
        $result = $db->findAll();

        return $result;
    }


    public function movieAction(Request $request)
    {
       $this->Getmovie();

        $db = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Film');


        $my_film = $db->noFilter('1', '8');
        $count = $db->count();

        if($request->isXmlHttpRequest())
        {
            $post = $request->request->all();

            $filter = $this->container->get('core.filter');

            $search = $filter->filterWork($post);

            $my_film = $db->filter($search);

            if($post['genre'] != '0')
            {
                foreach($my_film as $elem => $value)
                {
                    if(!strstr($value->getGenre(), $post['genre']))
                        unset($my_film[$elem]);
                }
            }

            $tab = [];
            $min = ($post['pag']) * 8 - 8;
            $max = ($post['pag'] * 8);

            $i = 0;
            foreach($my_film as $elem => $value)
            {
                $tab_film[$i] = $value;
                $i++;
            }

            while($min < $max && $min < $i)
            {
                $title = $tab_film[$min]->getTitle();
                $actor = $tab_film[$min]->getActors();
                $plot = $tab_film[$min]->getPlot();
                $director = $tab_film[$min]->getDirector();
                $poster = $tab_film[$min]->getPoster();
                $runtime = $tab_film[$min]->getRuntime();
                $genre = $tab_film[$min]->getGenre();
                $year = $tab_film[$min]->getYear();
                $idmdb = $tab_film[$min]->getIdmdb();
                $new = ["Title" => $title, "Actor" => $actor, "Plot" => $plot,
                    "Director" => $director, "Poster" => $poster, "Runtime" => $runtime,
                    "Genre" => $genre, "Year" => $year, 'Id' => $idmdb];
                $tab[] = $new;
                $min++;
            }
            $tab['count'] = $i;

            $response = new Response(json_encode($tab));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        $result = $this->autoComplete();
        return $this->render('CoreBundle:HP:movie.html.twig', array('data' => $my_film, 'count' => $count, 'data_search' => $result));

    }

    public function indexAction()
    {

        $em_film = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Film');

        $em_serie = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Serie');

        $latestFilm = $em_film->latestFilm();
        $latestSerie = $em_serie->latestSerie();

        $mostViewFilm = $em_film->mostView();
        $mostViewSerie = $em_serie->mostView();



        $result = $this->autoComplete();

        return $this->render('CoreBundle:HP:index.html.twig', array('data_search' => $result,
            'latestFilm' => $latestFilm,
            'latestSerie' => $latestSerie,
            'mostViewFilm' => $mostViewFilm,
            'mostViewSerie' => $mostViewSerie
        ));
    }

    public function streamAction($id)
    {
        $em = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Film');

        $resultFilm = $em->findByIdmdb($id);
        $link = $resultFilm->GetMagnet();
        //Recuperer le magnet et l'envoyer

        $result = $this->autoComplete();
        return $this->render('CoreBundle:HP:stream.html.twig', array('data_search' => $result, 'data_film' => $resultFilm));
    }

    public function testAction()
    {
        $transmission = new Transmission();
        $session = $transmission->getSession();

        $session->setDownloadDir('/home/foo/downloads/complete');

        echo "coucou";
        return $this->render('CoreBundle:HP:test.html.twig');
    }

    public function serieAction()
    {
        $result = $this->autoComplete();
        //$this->Addepisode();
        return $this->render('CoreBundle:HP:serie.html.twig', array('data_search' => $result, 'count' => 5));
    }

    public function Getprevious($episode, $seasonref, $name)
    {
       if ($episode == "E01")
       {
           return;
       }
        $episode = substr($episode, -2);
        $episoderef = $episode;
        $page = 0;
        $diff = 0;
        while ($episode > 0)
        {
            $title = str_replace(' ', '+', $name);
            //echo $title;
            $domgs = getSslPage('https://kickass.unblocked.vip/search.php?q='. $title . '/' . $page . '/');
            if ($domgs == NULL) {
                break;
            }
            $crawler = new Crawler($domgs);
            $result = $crawler
                ->filterXpath('//a')
                ->extract(array('href'));
            //echo 'before foreach';
            foreach ($result as $link)
            {
                $magnet = strstr($link, 'magnet');
                if ($magnet != NULL)
                {
                    $resultat = substr($link, strpos($link, '&dn') + 4, strpos($link, '&tr') - strpos($link, '&dn') - 4);
                    $iso = array('%28', '%29', '%5D', '%5B', '%3A');
                    if (strpos($resultat, '%') != NULL)
                        $resultat = str_replace($iso, '', $resultat);
                    $season_number = array('S0', 'S1', 'S2', 'S3');
                    $place = substr($resultat, strpos_array($resultat, $season_number), 6);
                    //dump($place); die();
                    $resultat = strtr($resultat, '+', ' ');
                    $resultat = strtr($resultat, '.', ' ');
                    $ep = substr($place, strpos($place, 'E'), 3);
                    $quality = array('brrip 720p', 'brrip 1080p', 'brrip', '720p', '1080p', 'webrip', 'hd-ts', 'hdts', 'hdrip', 'hdcam', 'hc', 'camrip', 'dvdrip', 'hdcam', 'hdtv');
                    $streamqual = strpos_array_needle($resultat, $quality);

                    //echo '[' . $name . '][' . $ep . '][' . $seasonref . ']['. $episode .'] RRRRR <br/>';
                    $dbes = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CoreBundle:Episode');
                    $sameepisode = $dbes->findBySeriename($name);
                    $diff = 0;
                    foreach ($sameepisode as $dupli)
                    {
                        $val1 = $dupli->getEpisode();
                        $val2 = $dupli->getSeason();
                        $diff = 0;
                        if ($val1 == $ep && $val2 == $seasonref)
                        {
                            $diff = 1;
                            break;
                        }
                    }
                   //echo $diff;
                    $epint = substr($ep, -2);

                    if ($diff == 0 && $epint < $episoderef && $ep != NULL && $place != NULL && $resultat != NULL)
                    {
                        $episode--;
                        //echo '[E'. $epint . 'S' . $episoderef . '][ADD][INDEX: ' . $episode . ']';
                        $alemepisode = $this->getDoctrine()->getManager();

                        $new_episode = new Episode;
                        $new_episode->setSeriename($name);
                        $new_episode->setEpisode($ep);
                        $new_episode->setSeason($seasonref);
                        $new_episode->setDatetime(date('Y/m/d H:i:s'));
                        $new_episode->setView('0');
                        $new_episode->setViewratingnumber('0');
                        $new_episode->setViewrating('0');
                        $new_episode->setStreamquality($streamqual);
                        $new_episode->setStreamsource('kickass');
                        $new_episode->setStreamlanguage('VO');
                        $new_episode->setLink('babar');
                        $new_episode->setAlreadysee('Nope Bro');

                        $alemepisode->persist($new_episode);
                        $alemepisode->flush();
                    }
                    //echo '<br/>';
                    if ($episode <= 1) {
                        //echo 'stop';
                        return;
                    }
                }
            }
            $page++;
        }
    }


    public function Tryserie($parse)
    {

        $elem = str_replace(' ', '+', $parse);
        $json=getSslPage('https://www.omdbapi.com/?t=' . $elem . '&type=series&plot=short&r=json');
        $infoserie=json_decode($json);
        if ($infoserie->Response == "False"){
            return (0);
        }
        $dbs = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Serie');
        $Serie = $dbs->findOneByIdmdb($infoserie->imdbID);
        if ($Serie == NULL)
        {
            $emserie = $this->getDoctrine()->getManager();

            $new_serie = new Serie;

            $new_serie->setTitle($infoserie->Title);
            $new_serie->setYear($infoserie->Year);
            $new_serie->setPoster($infoserie->Poster);
            $new_serie->setReleased($infoserie->Released);
            $new_serie->setWriter($infoserie->Writer);
            $new_serie->setRuntime($infoserie->Runtime);
            $new_serie->setGenre($infoserie->Genre);
            $new_serie->setDirector($infoserie->Director);
            $new_serie->setActors($infoserie->Actors);
            $new_serie->setPlot($infoserie->Plot);
            $new_serie->setLanguage($infoserie->Language);
            $new_serie->setRating($infoserie->imdbRating);
            $new_serie->setRated($infoserie->Rated);
            $new_serie->setIdmdb($infoserie->imdbID);
            $new_serie->setView('0');

            $emserie->persist($new_serie);
            $emserie->flush();
        }
        return (1);
    }

    public function Addepisode()
    {
        function getSslPage($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);                          /* ON RECUPERE L'URL, MEME LES HTTPS */
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }

        function strpos_array_needle($haystack, $needles, $offset = 0)
        {
            if (is_array($needles)) {
                foreach ($needles as $needle)
                {
                    $pos = strpos_array($haystack, $needle);
                    if ($pos !== false) {
                        return $needle;
                    }
                }
                return false;
            } else {
                return stripos($haystack, $needles, $offset);
            }
        }

        function strpos_array($haystack, $needles, $offset = 0)
        {
            if (is_array($needles)) {
                foreach ($needles as $needle)
                {
                    $pos = strpos_array($haystack, $needle);
                    if ($pos !== false) {
                        return $pos;
                    }
                }
                return false;
            } else {
                return stripos($haystack, $needles, $offset);
            }
        }


        $episode = 0;
        $nbr_episode = 1;
        $liens = 0;
        $diff = 0;
        $dom = getSslPage('https://kickass.unblocked.vip/tv/1/');
        $crawler = new Crawler($dom);
        $result = $crawler
            ->filterXpath('//a')
            ->extract(array('href'));
        foreach ($result as $link)
        {
            $magnet = strstr($link, 'magnet');
            if ($magnet != NULL)
            {
                $liens++;
                $resultat = substr($link, strpos($link, '&dn') + 4, strpos($link, '&tr') - strpos($link, '&dn') - 4);
                $iso = array('%28', '%29', '%5D', '%5B', '%3A');
                if (strpos($resultat, '%') != NULL)
                    $resultat = str_replace($iso, '', $resultat);
                $season_number = array('S0', 'S1', 'S2', 'S3');
                $place = substr($resultat, strpos_array($resultat, $season_number), 6);
                //dump($place); die();
                $resultat = strtr($resultat, '+', ' ');
                $resultat = strtr($resultat, '.', ' ');
                $season = substr($place, 0, strpos($place, 'E'));
                $ep = substr($place, strpos($place, 'E'), 3);
                $parse = substr($resultat, 0, strpos_array($resultat, $season_number));

                $quality = array('brrip 720p', 'brrip 1080p', 'brrip', '720p', '1080p', 'webrip', 'hd-ts', 'hdts', 'hdrip', 'hdcam', 'hc', 'camrip', 'dvdrip', 'hdcam', 'hdtv');
                $streamqual = strpos_array_needle($resultat, $quality);
                $dbe = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('CoreBundle:Episode');
                $sameepisode = $dbe->findBySeriename($parse);
                //echo $parse . "<br/>";
                $diff = 0;
                foreach ($sameepisode as $dupli)
                {
                    $val1 = $dupli->getEpisode();
                    $val2 = $dupli->getSeason();
                    $diff = 0;
                    if ($val1 == $ep && $val2 == $season)
                    {
                        $diff = 1;
                        //echo '[' . $ep . '][' . $season . '][' . $val1 . '][' . $val2 . ']<br/>';
                        break;
                    }
                }
                //echo $diff . '<br/>';
                if ($diff == 0 && $ep != NULL && $season != NULL && $parse != NULL)
                {
                    //echo 'Should ADD<br/>';
                    $ifcan = $this->Tryserie($parse);
                    if ($ifcan) {
                        $this->Getprevious($ep, $season, $parse);

                        //echo 'ADD_serie';
                        $episode++;
                        $emepisode = $this->getDoctrine()->getManager();

                        $new_episode = new Episode;
                        $new_episode->setSeriename($parse);
                        $new_episode->setEpisode($ep);
                        $new_episode->setSeason($season);
                        $new_episode->setDatetime(date('Y/m/d H:i:s'));
                        $new_episode->setView('0');
                        $new_episode->setViewratingnumber('0');
                        $new_episode->setViewrating('0');
                        $new_episode->setStreamquality($streamqual);
                        $new_episode->setStreamsource('kickass');
                        $new_episode->setStreamlanguage('VO');
                        $new_episode->setLink('babar');
                        $new_episode->setAlreadysee('Nope Bro');

                        $emepisode->persist($new_episode);
                        $emepisode->flush();


                        if ($episode == $nbr_episode) {
                            //echo 'break';
                            break;
                        }
                    }
                }
            }
        }
    }

    public function Getmovie()
    {
//        ignore_user_abort(false);
//        set_time_limit(20);

        function strpos_array($haystack, $needles, $offset = 0)
        {
            if (is_array($needles))
            {
                foreach ($needles as $needle)
                {
                    $pos = strpos_array($haystack, $needle);
                    if ($pos !== false)
                    {
                        return $needle;
                    }
                }
                return false;
            }
            else
            {
                return stripos($haystack, $needles, $offset);
            }
        }

        function getSslPage($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);                          /* ON RECUPERE L'URL, MEME LES HTTPS */
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }

        $film = 0;
        $liens = 0;
        $page = 0;
        $nbr_film = 20;
        $db = $this->getDoctrine()
            ->getManager()
            ->getRepository('CoreBundle:Film');
        while ($film != $nbr_film && $page < 20)
        {
            $dom = getSslPage('https://kickass.unblocked.vip/movies/'. $page .'/'); /* ON RECUPERE LE CODE SOURCE ET EXTRAIT TOUT LES LIENS D'UNE PAGE */
            $crawler = new Crawler($dom);
            $result = $crawler
                ->filterXpath('//a')
                ->extract(array('href'));
            foreach ($result as $link)
            {
                $date = 1950;
                $magnet = strstr($link, 'magnet');
                if ($magnet != NULL)
                {
                    $liens++;
                    $resultat = strstr($link, 'dn=');
                    $output = substr($resultat, 3, strpos($resultat, '&'));
                    $output = strtr($output, '+', ' ');
                    $output = strtr($output, '.', ' ');
                    $parse = $output;
                    $iso = array('%28', '%29', '%5D', '%5B', '%3A');
                    if (strpos($parse, '%') != NULL)
                    {
                        $parse = str_replace($iso, ' ', $parse);
                    }
                    $quality = array('brrip 720p', 'brrip 1080p', 'brrip', '720p', '1080p', 'webrip', 'hd-ts', 'hdts', 'ts', 'hdrip', 'hdcam', 'hc', 'camrip', 'dvdrip', 'hdcam');
                    $streamqual = strpos_array($parse, $quality);
                    $langue = array('english', 'french', 'truefrench');
                    $streamlang = strpos_array($parse, $langue);
                    if ($streamlang == NULL)
                    {$streamlang = "N/A";}
                    if ($streamqual == NULL)
                    {$streamqual = "N/A";}
                    while ($date < 2100)
                    {
                        $new_parse = substr($parse, 0, strpos($parse, ' ' . $date . ' '));
                        if ($new_parse == NULL)
                        {
                            $date++;
                        }
                        else
                        {
                            $elem = str_replace(' ', '+', $new_parse);
                            $json=getSslPage('https://www.omdbapi.com/?t=' . $elem . '&y=' . $date . '&type=movie&plot=short&r=json');
                            $info=json_decode($json);
                            if ($info->Response == "False" || $info->Poster == "N/A")
                                break;
                            $db = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('CoreBundle:Film');
                            $IID = $db->findOneByIdmdb($info->imdbID);
                            if ($IID == NULL)
                            {
                                $em = $this->getDoctrine()->getManager();

                                $new_movie = new Film;


                               // dump($info->Poster); die();
                                $image = $info->Poster;
                                $current = file_get_contents($image);
                              //  dump($current); die();
                                $filename = uniqid() . ".jpg";
                                $reposite = "image/poster/" . $filename;
                                file_put_contents($reposite, $current);
                                $new_movie->setPoster($reposite);


                                $new_movie->setTitle($info->Title);
                                $new_movie->setYear($info->Year);
                                $new_movie->setReleased($info->Released);
                                $new_movie->setWriter($info->Writer);
                                $new_movie->setRuntime($info->Runtime);
                                $new_movie->setGenre($info->Genre);
                                $new_movie->setDirector($info->Director);
                                $new_movie->setActors($info->Actors);
                                $new_movie->setPlot($info->Plot);
                                $new_movie->setLanguage($info->Language);
                                $new_movie->setRating($info->imdbRating);
                                $new_movie->setRated($info->Rated);
                                $new_movie->setIdmdb($info->imdbID);
                                $new_movie->setMagnet($magnet);

                                $new_movie->setDatetime(date('Y/m/d H:i:s'));
                                $new_movie->setView('0');
                                $new_movie->setViewerratingnumber('0');
                                $new_movie->setViewerrating('0');
                                $new_movie->setStreamquality($streamqual);
                                $new_movie->setStreamsource('ThePirateBay');
                                $new_movie->setStreamlanguage($streamlang);
                                $new_movie->setAlreadysee('Nope Bro');

                                $em->persist($new_movie);
                                $em->flush();
                                $film++;
                            }
                            break;
                        }
                    }
                    if ($film == $nbr_film || $liens == 10)
                    {
                        break;
                    }
                }
            }
            $page++;
        }
    }
}

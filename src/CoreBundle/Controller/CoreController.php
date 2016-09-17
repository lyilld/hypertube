<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{
	public function movieAction()
	{
		$db = $this->getDoctrine()
		      ->getManager()
		      ->getRepository('CoreBundle:OMDb');
		    $my_omdb = $db->findAll();
	return $this->render('CoreBundle:HP:movie.html.twig', array('data' => $my_omdb));
	}

	public function indexAction()
	{
	return $this->render('CoreBundle:HP:index.html.twig');
	}

	public function serieAction()
	{
		return $this->render('CoreBundle:HP:serie.html.twig');
	}

  public function Getmovie()
  {
  	ignore_user_abort(true);
	set_time_limit(0);

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
	$nbr_film = 2;
	while ($film != $nbr_film && $liens < 10)
	{
		$dom = getSslPage('https://thepiratebay.org/browse/201/' . $page . '/7'); /* ON RECUPERE LE CODE SOURCE ET EXTRAIT TOUT LES LIENS D'UNE PAGE */
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

				while ($date < 2100)
				{
					$new_parse = substr($parse, 0, strpos($parse, ' ' . $date . ' '));
					if ($new_parse == NULL)
					{
						$date++;
					}
					else
					{
						$liens++;
						$db = $this->getDoctrine()
					      ->getManager()
					      ->getRepository('CoreBundle:OMDb');
						$elem = str_replace(' ', '+', $new_parse);
						$json=getSslPage('https://www.omdbapi.com/?t=' . $elem . '&y=' . $date . '&type=movie&plot=short&r=json');
						$info=json_decode($json);
						if ($info->Response == "False")
							break;
						$IID = $db->findOneByIdmdb($info->imdbID);
						if ($IID != NULL )
						{ 
							//echo "deja en BD";
						}
						else
						{
							$em = $this->getDoctrine()->getManager();

							$new_movie = new OMDb;
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
							$new_movie->setPoster($info->Poster);
							$new_movie->setRating($info->imdbRating);
							$new_movie->setRated($info->Rated);
							$new_movie->setIdmdb($info->imdbID);
							$new_movie->setMagnet($magnet);

							$new_movie->setDatetime(date('Y/m/d H:i:s'));
							//$new_movie->setQuality('720p');
							//$new_movie->setSource('ThePirateBay');
							//$new_movie->setStreamlanguage('french');
							$em->persist($new_movie);
							$em->flush();
							$film++;
						};
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

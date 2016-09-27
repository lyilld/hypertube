<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="released", type="string", length=255)
     */
    private $released;

    /**
     * @var string
     *
     * @ORM\Column(name="runtime", type="string", length=255)
     */
    private $runtime;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="writer", type="text")
     */
    private $writer;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="text")
     */
    private $actors;

    /**
     * @var string
     *
     * @ORM\Column(name="plot", type="text")
     */
    private $plot;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="text")
     */
    private $poster;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="rated", type="string", length=255)
     */
    private $rated;

    /**
     * @var string
     *
     * @ORM\Column(name="idmdb", type="string", length=255, unique=true)
     */
    private $idmdb;

    /**
     * @var string
     *
     * @ORM\Column(name="magnet", type="text")
     */
    private $magnet;

    /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string", length=255)
     */
    private $datetime;

    /**
     * @var int
     *
     * @ORM\Column(name="View", type="integer")
     */
    private $view;

    /**
     * @var int
     *
     * @ORM\Column(name="Viewerrating", type="integer")
     */
    private $viewerrating;

    /**
     * @var string
     *
     * @ORM\Column(name="Viewerratingnumber", type="string", length=255)
     */
    private $viewerratingnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Streamlanguage", type="string", length=255)
     */
    private $streamlanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="Streamsource", type="string", length=255)
     */
    private $streamsource;

    /**
     * @var string
     *
     * @ORM\Column(name="Streamquality", type="string", length=255)
     */
    private $streamquality;

    /**
     * @var string
     *
     * @ORM\Column(name="Alreadysee", type="string", length=255)
     */
    private $alreadysee;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Film
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Film
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set released
     *
     * @param string $released
     *
     * @return Film
     */
    public function setReleased($released)
    {
        $this->released = $released;

        return $this;
    }

    /**
     * Get released
     *
     * @return string
     */
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     *
     * @return Film
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set director
     *
     * @param string $director
     *
     * @return Film
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set writer
     *
     * @param string $writer
     *
     * @return Film
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Get writer
     *
     * @return string
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Set actors
     *
     * @param string $actors
     *
     * @return Film
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set plot
     *
     * @param string $plot
     *
     * @return Film
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return string
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Film
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set poster
     *
     * @param string $poster
     *
     * @return Film
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set rating
     *
     * @param string $rating
     *
     * @return Film
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set rated
     *
     * @param string $rated
     *
     * @return Film
     */
    public function setRated($rated)
    {
        $this->rated = $rated;

        return $this;
    }

    /**
     * Get rated
     *
     * @return string
     */
    public function getRated()
    {
        return $this->rated;
    }

    /**
     * Set idmdb
     *
     * @param string $idmdb
     *
     * @return Film
     */
    public function setIdmdb($idmdb)
    {
        $this->idmdb = $idmdb;

        return $this;
    }

    /**
     * Get idmdb
     *
     * @return string
     */
    public function getIdmdb()
    {
        return $this->idmdb;
    }

    /**
     * Set magnet
     *
     * @param string $magnet
     *
     * @return Film
     */
    public function setMagnet($magnet)
    {
        $this->magnet = $magnet;

        return $this;
    }

    /**
     * Get magnet
     *
     * @return string
     */
    public function getMagnet()
    {
        return $this->magnet;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Film
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set view
     *
     * @param integer $view
     *
     * @return Film
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set viewerrating
     *
     * @param integer $viewerrating
     *
     * @return Film
     */
    public function setViewerrating($viewerrating)
    {
        $this->viewerrating = $viewerrating;

        return $this;
    }

    /**
     * Get viewerrating
     *
     * @return integer
     */
    public function getViewerrating()
    {
        return $this->viewerrating;
    }

    /**
     * Set viewerratingnumber
     *
     * @param string $viewerratingnumber
     *
     * @return Film
     */
    public function setViewerratingnumber($viewerratingnumber)
    {
        $this->viewerratingnumber = $viewerratingnumber;

        return $this;
    }

    /**
     * Get viewerratingnumber
     *
     * @return string
     */
    public function getViewerratingnumber()
    {
        return $this->viewerratingnumber;
    }

    /**
     * Set streamlanguage
     *
     * @param string $streamlanguage
     *
     * @return Film
     */
    public function setStreamlanguage($streamlanguage)
    {
        $this->streamlanguage = $streamlanguage;

        return $this;
    }

    /**
     * Get streamlanguage
     *
     * @return string
     */
    public function getStreamlanguage()
    {
        return $this->streamlanguage;
    }

    /**
     * Set streamsource
     *
     * @param string $streamsource
     *
     * @return Film
     */
    public function setStreamsource($streamsource)
    {
        $this->streamsource = $streamsource;

        return $this;
    }

    /**
     * Get streamsource
     *
     * @return string
     */
    public function getStreamsource()
    {
        return $this->streamsource;
    }

    /**
     * Set streamquality
     *
     * @param string $streamquality
     *
     * @return Film
     */
    public function setStreamquality($streamquality)
    {
        $this->streamquality = $streamquality;

        return $this;
    }

    /**
     * Get streamquality
     *
     * @return string
     */
    public function getStreamquality()
    {
        return $this->streamquality;
    }

    /**
     * Set alreadysee
     *
     * @param string $alreadysee
     *
     * @return Film
     */
    public function setAlreadysee($alreadysee)
    {
        $this->alreadysee = $alreadysee;

        return $this;
    }

    /**
     * Get alreadysee
     *
     * @return string
     */
    public function getAlreadysee()
    {
        return $this->alreadysee;
    }
}

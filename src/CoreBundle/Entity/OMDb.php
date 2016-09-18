<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OMDb
 */
class OMDb
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $year;

    /**
     * @var string
     */
    private $released;

    /**
     * @var string
     */
    private $runtime;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $director;

    /**
     * @var text
     */
    private $writer;

    /**
     * @var text
     */
    private $actors;

    /**
     * @var text
     */
    private $plot;

    /**
     * @var string
     */
    private $language;

    /**
     * @var text
     */
    private $poster;

    /**
     * @var string
     */
    private $rating;

    /**
     * @var string
     */
    private $rated;

    /**
     * @var string
     */
    private $idmdb;

    /**
     * @var text
     */
    private $magnet;

    /**
     * @var text
     */
    private $datetime;

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
     * @return OMDb
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
     * Set datetime
     *
     * @param string $datetime
     *
     * @return OMDb
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
     * Set year
     *
     * @param string $year
     *
     * @return OMDb
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
     * @return OMDb
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
     * @return OMDb
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
     * @return OMDb
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
     * @return OMDb
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
     * Set Writer
     *
     * @param text $Writer
     *
     * @return OMDb
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Get Writer
     *
     * @return text
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Set actors
     *
     * @param text $actors
     *
     * @return OMDb
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return text
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set plot
     *
     * @param text $plot
     *
     * @return OMDb
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return text
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
     * @return OMDb
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
     * @param text $poster
     *
     * @return OMDb
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return text
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
     * @return OMDb
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
     * @return OMDb
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
     * @return OMDb
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
     * @param text $magnet
     *
     * @return OMDb
     */
    public function setMagnet($magnet)
    {
        $this->magnet = $magnet;

        return $this;
    }

    /**
     * Get magnet
     *
     * @return text
     */
    public function getMagnet()
    {
        return $this->magnet;
    }
}

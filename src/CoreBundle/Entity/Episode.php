<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @ORM\Column(name="Seriename", type="string", length=255)
     */
    private $seriename;

    /**
     * @var string
     *
     * @ORM\Column(name="Episode", type="string", length=255)
     */
    private $episode;

    /**
     * @var string
     *
     * @ORM\Column(name="Season", type="string", length=255)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="Datetime", type="string", length=255)
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
     * @ORM\Column(name="Viewrating", type="integer")
     */
    private $viewrating;

    /**
     * @var string
     *
     * @ORM\Column(name="Viewratingnumber", type="string", length=255)
     */
    private $viewratingnumber;

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
     * @ORM\Column(name="Link", type="text")
     */
    private $link;

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
     * Set seriename
     *
     * @param string $seriename
     *
     * @return Episode
     */
    public function setSeriename($seriename)
    {
        $this->seriename = $seriename;

        return $this;
    }

    /**
     * Get seriename
     *
     * @return string
     */
    public function getSeriename()
    {
        return $this->seriename;
    }

    /**
     * Set episode
     *
     * @param string $episode
     *
     * @return Episode
     */
    public function setEpisode($episode)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return string
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Episode
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Episode
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
     * @return Episode
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set viewrating
     *
     * @param integer $viewrating
     *
     * @return Episode
     */
    public function setViewrating($viewrating)
    {
        $this->viewrating = $viewrating;

        return $this;
    }

    /**
     * Get viewrating
     *
     * @return int
     */
    public function getViewrating()
    {
        return $this->viewrating;
    }

    /**
     * Set viewratingnumber
     *
     * @param string $viewratingnumber
     *
     * @return Episode
     */
    public function setViewratingnumber($viewratingnumber)
    {
        $this->viewratingnumber = $viewratingnumber;

        return $this;
    }

    /**
     * Get viewratingnumber
     *
     * @return string
     */
    public function getViewratingnumber()
    {
        return $this->viewratingnumber;
    }

    /**
     * Set streamlanguage
     *
     * @param string $streamlanguage
     *
     * @return Episode
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
     * @return Episode
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
     * @return Episode
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
     * Set link
     *
     * @param string $link
     *
     * @return Episode
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set alreadysee
     *
     * @param string $alreadysee
     *
     * @return Episode
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

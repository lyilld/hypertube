<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistique
 *
 * @ORM\Table(name="statistique")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\StatistiqueRepository")
 */
 
class Statistique
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
     * @ORM\Column(name="historique", type="string", length=255, nullable=true)
     */
    private $historique;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrfilm", type="smallint", nullable=true)
     */
    private $nbrfilm;

    /**
     * @var string
     *
     * @ORM\Column(name="favoris", type="string", length=255, nullable=true)
     */
    private $favoris;


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
     * Set historique
     *
     * @param string $historique
     *
     * @return Statistique
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return string
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Statistique
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set nbrfilm
     *
     * @param integer $nbrfilm
     *
     * @return Statistique
     */
    public function setNbrfilm($nbrfilm)
    {
        $this->nbrfilm = $nbrfilm;

        return $this;
    }

    /**
     * Get nbrfilm
     *
     * @return int
     */
    public function getNbrfilm()
    {
        return $this->nbrfilm;
    }

    /**
     * Set favoris
     *
     * @param string $favoris
     *
     * @return Statistique
     */
    public function setFavoris($favoris)
    {
        $this->favoris = $favoris;

        return $this;
    }

    /**
     * Get favoris
     *
     * @return string
     */
    public function getFavoris()
    {
        return $this->favoris;
    }
}

<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

  /**
 * @ORM\OneToOne(targetEntity="UserBundle\Entity\Statistique", cascade={"persist"})
 */

    private $statistique;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
    *  @Assert\Length(
    *     min=2,
    *     max=255,
    *     minMessage="Votre nom n'est pas valide",
    *     maxMessage="Votre nom n'est pas valide",
    *
    *     groups={"Registration", "Profile"}
    *)
     */
     public $lastname;

     /**
      *
      * @ORM\Column(name="firstname", type="string", length=255)
      *@Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="Votre nom n'est pas valide",
     *     maxMessage="Votre nom n'est pas valide",
     *
     *     groups={"Registration", "Profile"}
     * )
      *
      */

      public $firstname;

      public $url;

      /**
      *@orm\Column(name="image", type="text")
      *
      *@Assert\NotBlank(message="N'oublier pas d'ajouter une photo de profile", groups={"Registration", "Profile"})
      *@Assert\File(
      *     maxSize = "2M",
      *     maxSizeMessage = "Votre photo est trop lourde",
      *     mimeTypes = {"image/jpeg", "image/png", "image/jpg"},
      *     mimeTypesMessage = "Votre fichier n'est pas dans le bon format",
      *     groups={"Registration", "Profile"}
      *
      *
      *)
      */

      public $image;


      public function Upload($image)
      {
        if (!file_exists('image'))
        {
          mkdir('image', 0777, true);
        }

        $filename = uniqid() . ".png";
        $image->move("../image", $filename);

        $this->url = "image/" . $filename;

        return $this->url;
      }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return fos_user
     */

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
    *Get image
    *
    *@return text
    */

    public function getImage()
    {
      return $this->image;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return fos_user
     */
    public function setFirsname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
    * Set image
    *
    *@param text $image
    *
    *@return fos_user
    */


    public function setImage($image)
    {
      $this->image = $image;

      return $this->image;
    }

    /**
     * Get Firstname
     *
     * @return string
     */

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setStatistique($statistique)
    {
      $this->statistique = $statistique;
    }

    public function getStatistique()
    {
      return $this->statistique;
    }


    public function getId()
    {
      return $this->id;
    }

}

<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 02/12/2018
     * Time: 15:54
     */

    namespace AppBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;

    /**
     * @ORM\Table(name="auteur")
     * @ORM\Entity(repositoryClass="AppBundle\Repository\AuteurRepository")
     */

    class Auteur
    {
//      COLONNES DE LA TABLE
//      -------------------

//      Clé primaire

        /**
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

//                      -----

        /**
         * @ORM\Column(type="text", nullable=true)
         */
        private $f_name;

        /**
         * @ORM\Column(type="text")
         */
        private $l_name;

        /**
         * @ORM\Column(type="date")
         */
        private $birthdate;

        /**
         * @ORM\Column(type="date", nullable=true)
         */
        private $deathdate;

        /**
         * @ORM\Column(type="string")
         * @Assert\Length(
         *      min = 15,
         *      max = 500,
         *      minMessage = "Longueur minimum: {{ limit }} caractères",
         *      maxMessage = "Longueur maximum: {{ limit }} caractères"
         * )
         */
        private $bio;


//      Clés secondaires

        /**
         * @ORM\ManyToOne(targetEntity="Image", inversedBy="auteur")
         */
        private $image;

        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country", inversedBy="auteur")
         */
        private $country;

//        /**
//         * @ORM\OneToMany(targetEntity="Livre", mappedBy="auteur")
//         */
//        private $livre;




//      GETTERS & SETTERS
//      -------------------


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getFName()
        {
            return $this->f_name;
        }

        /**
         * @param mixed $f_name
         */
        public function setFName($f_name)
        {
            $this->f_name = $f_name;
        }

        /**
         * @return mixed
         */
        public function getLName()
        {
            return $this->l_name;
        }

        /**
         * @param mixed $l_name
         */
        public function setLName($l_name)
        {
            $this->l_name = $l_name;
        }

        /**
         * @return mixed
         */
        public function getBirthdate()
        {
            return $this->birthdate;
        }

        /**
         * @param mixed $birthdate
         */
        public function setBirthdate($birthdate)
        {
            $this->birthdate = $birthdate;
        }

        /**
         * @return mixed
         */
        public function getDeathdate()
        {
            return $this->deathdate;
        }

        /**
         * @param mixed $deathdate
         */
        public function setDeathdate($deathdate)
        {
            $this->deathdate = $deathdate;
        }

        /**
         * @return mixed
         */
        public function getCountry()
        {
            return $this->country;
        }

        /**
         * @param mixed $country
         */
        public function setCountry($country)
        {
            $this->country = $country;
        }

        /**
         * @return mixed
         */
        public function getBio()
        {
            return $this->bio;
        }

        /**
         * @param mixed $bio
         */
        public function setBio($bio)
        {
            $this->bio = $bio;
        }

        /**
         * @return mixed
         */
        public function getImage()
        {
            return $this->image;
        }

        /**
         * @param mixed $image
         */
        public function setImage($image)
        {
            $this->image = $image;
        }

        /**
         * @return mixed
         */
        public function getLivre()
        {
            return $this->livre;
        }

        /**
         * @param mixed $livre
         */
        public function setLivre($livre)
        {
            $this->livre = $livre;
        }




    }
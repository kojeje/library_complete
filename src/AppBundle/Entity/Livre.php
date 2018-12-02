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
     * @ORM\Table(name="livre")
     * @ORM\Entity(repositoryClass="AppBundle\Repository\LivreRepository")
     */


    class Livre
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
         * @ORM\Column(type="string")
         */
        private $titre;

        /**
         * @ORM\Column(type="string")
         * @Assert\Length(
         *      min = 15,
         *      max = 500,
         *      minMessage = "Longueur minimum: {{ limit }} caractères",
         *      maxMessage = "Longueur maximum: {{ limit }} caractères"
         * )
         */
        private $resume;

        /**
         * @ORM\Column(type="date")
         */
        private $parution_date;



//      Clés secondaires

        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Genre", mappedBy="livre")
         */
        private $genre;

        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Auteur", mappedBy="livre")
         */
        private $auteur;

        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="livre")
         */
        private $user;

        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="livre")
         */
        private $image;





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
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getResume()
        {
            return $this->resume;
        }

        /**
         * @param mixed $resume
         */
        public function setResume($resume)
        {
            $this->resume = $resume;
        }

        /**
         * @return mixed
         */
        public function getParutionDate()
        {
            return $this->parution_date;
        }

        /**
         * @param mixed $parution_date
         */
        public function setParutionDate($parution_date)
        {
            $this->parution_date = $parution_date;
        }

        /**
         * @return mixed
         */
        public function getGenre()
        {
            return $this->genre;
        }

        /**
         * @param mixed $genre
         */
        public function setGenre($genre)
        {
            $this->genre = $genre;
        }

        /**
         * @return mixed
         */
        public function getAuteur()
        {
            return $this->auteur;
        }

        /**
         * @param mixed $auteur
         */
        public function setAuteur($auteur)
        {
            $this->auteur = $auteur;
        }

        /**
         * @return mixed
         */
        public function getUser()
        {
            return $this->user;
        }

        /**
         * @param mixed $user
         */
        public function setUser($user)
        {
            $this->user = $user;
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


    }
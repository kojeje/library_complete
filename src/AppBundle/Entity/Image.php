<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 02/12/2018
     * Time: 15:55
     */

    namespace AppBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;

    /**
     * @ORM\Table(name="image")
     * @ORM\Entity(repositoryClass="AppBundle\Repository\imageRepository")
     */

    class Image
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
         * @Assert\Length(
         *      max = 20,
         *      maxMessage = "Longueur maximum: {{ limit }} caractères"
         * )
         */
        private $keyword;


//      Clés secondaires

        /**
         * @ORM\ManyToOne(targetEntity="Genre", inversedBy="image")
         */
        private $genre;

        /**
         * @ORM\ManyToOne(targetEntity="Auteur", inversedBy="image")
         */
        private $auteur;

        /**
         * @ORM\ManyToOne(targetEntity="Livre", inversedBy="image")
         */
        private $livre;

        /**
         * @ORM\ManyToOne(targetEntity="User", inversedBy="image")
         */
        private $user;




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
        public function getKeyword()
        {
            return $this->keyword;
        }

        /**
         * @param mixed $keyword
         */
        public function setKeyword($keyword)
        {
            $this->keyword = $keyword;
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

    }
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
     * @ORM\Table(name="genre")
     * @ORM\Entity(repositoryClass="AppBundle\Repository\GenreRepository")
     */

    class Genre
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
         *      min = 2,
         *      max = 20,
         *      minMessage = "Longueur minimum: {{ limit }} caractères",
         *      maxMessage = "Longueur maximum: {{ limit }} caractères"
         * )
         */
        private $lbl;



//      Clé secondaire
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="genre")
         */
        private $image;

        /**
         * @ORM\ManyToOne(targetEntity="Livre", inversedBy="genre")
         */
        private $livre;



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
        public function getLbl()
        {
            return $this->lbl;
        }

        /**
         * @param mixed $lbl
         */
        public function setLbl($lbl)
        {
            $this->lbl = $lbl;
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
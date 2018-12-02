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
     * @ORM\Table(name="country")
     * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
     */

    class Country
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
         * @ORM\Column(type="string", length=2)
         */
        private $country_code;

        /**
         * @ORM\Column(type="string")
         * @Assert\Length(
         *      min = 2,
         *      max = 50,
         *      minMessage = "Longueur minimum: {{ limit }} caractères",
         *      maxMessage = "Longueur maximum: {{ limit }} caractères"
         * )
         */
        private $lbl;


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
        public function getCountryCode()
        {
            return $this->country_code;
        }

        /**
         * @param mixed $country_code
         */
        public function setCountryCode($country_code)
        {
            $this->country_code = $country_code;
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

    }
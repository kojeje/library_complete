<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 02/12/2018
     * Time: 23:34
     */
    namespace AppBundle\Entity;

    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="fos_user")
     */
    class User extends BaseUser
    {

//      COLONNES DE LA TABLE
//      -------------------

//      Clé primaire

        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

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
         * @ORM\Column(type="text")
         */
        private $ad_1;

        /**
         * @ORM\Column(type="text", nullable=true)
         */
        private $ad_2;

        /**
         * @ORM\Column(type="integer", length=5)
         */
        private $zip_code;

        /**
         * @ORM\Column(type="text")
         */
        private $town;

        /**
         * @ORM\Column(type="string", length=10)
         */
        private $tel;

//      Clé secondaire

        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="user")
         */
        private $image;


        /**
         * @ORM\ManyToOne(targetEntity="Livre", inversedBy="user")
         */
        private $livre;

        /**
         * @return mixed
         */
        public function getAd1()
        {
            return $this->ad_1;
        }

        /**
         * @param mixed $ad_1
         */
        public function setAd1($ad_1)
        {
            $this->ad_1 = $ad_1;
        }

        /**
         * @return mixed
         */
        public function getAd2()
        {
            return $this->ad_2;
        }

        /**
         * @param mixed $ad_2
         */
        public function setAd2($ad_2)
        {
            $this->ad_2 = $ad_2;
        }

//        /**
//         * @return mixed
//         */
//        public function getId()
//        {
//            return $this->id;
//        }

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
        public function getZipCode()
        {
            return $this->zip_code;
        }

        /**
         * @param mixed $zip_code
         */
        public function setZipCode($zip_code)
        {
            $this->zip_code = $zip_code;
        }

        /**
         * @return mixed
         */
        public function getTown()
        {
            return $this->town;
        }

        /**
         * @param mixed $town
         */
        public function setTown($town)
        {
            $this->town = $town;
        }

        /**
         * @return mixed
         */
        public function getTel()
        {
            return $this->tel;
        }

        /**
         * @param mixed $tel
         */
        public function setTel($tel)
        {
            $this->tel = $tel;
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



//      ------------------------------------

        public function __construct()
        {
            parent::__construct();
            // your own logic
        }
    }
<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 04/12/2018
     * Time: 01:13
     */



    namespace AppBundle\Controller;


    use AppBundle\Entity\Auteur;
    use AppBundle\Entity\Livre;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class DefaultController extends Controller
{
        /**
         * @Route("/", name="home")
         */
        public function HomeTestAction()


    {

        return $this->render("@App/Default/banner.html.twig");

    }
        /**
         * @Route("/contact", name="contact")
         */
        public function ContactTestAction()


    {

        return $this->render("@App/Default/contact.html.twig");

}
    }
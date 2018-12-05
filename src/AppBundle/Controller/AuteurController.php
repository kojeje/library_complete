<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 04/12/2018
     * Time: 14:49
     */
    namespace AppBundle\Controller;


    use AppBundle\Entity\Auteur;
    use AppBundle\Entity\Livre;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class AuteurController extends Controller
    {
//




        /**
         * @Route("/auteurs", name="auteurs")
         */
        public function auteurTestAction()

//       Doctrine fait le lien entre la base de données et la programmation objet
        {
            $repository = $this->getDoctrine()->getRepository(Auteur::class);

            $auteurs = $repository->findAll();
//
            return $this->render("@App/Pages/auteur.html.twig",
                [
                    'auteurs' => $auteurs
                ]
            );

        }
    }
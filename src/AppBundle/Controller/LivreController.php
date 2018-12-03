<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 26/11/2018
     * Time: 15:51
     */
    namespace AppBundle\Controller;


    use AppBundle\Entity\Auteur;
    use AppBundle\Entity\Livre;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class LivreController extends Controller
    {
//


        /**
         * @Route("/", name="livre")
         */
        public function livresTestAction()

//       Doctrine fait le lien entre la base de données et la programmation objet
        {
            $repository = $this->getDoctrine()->getRepository(Livre::class);

            $livres = $repository->findAll();
            var_dump($livres);die;
//            return $this->render("@App/Default/livre.html.twig",
//                [
//                    'livres' => $livres
//                ]);
            return $this->render("@App/Default/");
        }
    }
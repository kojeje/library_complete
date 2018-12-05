<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 04/12/2018
     * Time: 16:55
     */

    namespace AppBundle\Controller;


    use AppBundle\Entity\Auteur;
    use AppBundle\Form\AuteurType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class adminAuteurController extends Controller
    {
        /**
         * @Route("/admin/auteurs", name="admin_auteurs")
         */
        public function auteurAdminAction()

//       Doctrine fait le lien entre la base de données et la programmation objet
        {
            $repository = $this->getDoctrine()->getRepository(Auteur::class);

            $auteurs = $repository->findAll();


            return $this->render("@App/Pages/auteur.html.twig",
                [
                    'auteurs' => $auteurs
                ]);
        }

        /**
         * @Route("/admin/ajout_auteur", name="ajout_auteur_admin")
         */
        public function adminAjoutAuteur ()
        {
            $auteur= new Auteur();
            $form=$this->createForm(AuteurType::class, $auteur);
            var_dump($auteur);die;
            return $this->render("@App/Pages/ajout_auteur_admin.html.twig",
                [
                    'formAuteur'=>$form->createView()
                ]
            );
        }

    }
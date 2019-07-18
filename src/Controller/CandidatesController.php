<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Candidates;
use App\Entity\Categorys;
use App\Form\CandidatesType;
use App\Form\ProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @Route("/candidates")
 */
class CandidatesController extends AbstractController
{
    /**
     * @Route("/", name="candidates_index", methods={"GET"})
     */
    public function index(): Response
    {
        $candidates = $this->getDoctrine();
            

        return $this->render('candidates/index.html.twig');
    }



    /**
     * @Route ("/profil", name="candidates_profil")
     */
    public function profil()
    {
        return $this->render('candidates/profil.html.twig');
    }


    /**
     * @Route("/login", name="candidates_login", methods={"GET","POST"})
     */
    public function login(): Response
    {
        $candidates = $this->getDoctrine()
            ->getRepository(Candidates::class)
            ->findAll();

        return $this->render('candidates/login.html.twig', [
            'candidates' => $candidates,
        ]);
    }

    /**
     * @Route("/edit", name="candidates_edit", methods={"GET","POST"})
     */
     public function edit(Request $request, UserInterface $users): Response
     {
        $candidat = $this->getDoctrine()
        ->getRepository(Candidates::class)
        ->findOneBy([
            'user' => $users->getId()
        ]);

         $form = $this->createForm(ProfilType::class, $candidat);
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             $this->getDoctrine()->getManager()->flush();
 
             return $this->redirectToRoute('joboffers_index');
         }
 
         return $this->render('candidates/profil.html.twig', [
             'candidate' => $candidat,
             'form' => $form->createView(),
         ]);
     }
}

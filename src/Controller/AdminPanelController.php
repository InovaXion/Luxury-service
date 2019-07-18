<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Candidates;
use App\Entity\Clients;
use App\Entity\Categorys;
use App\Entity\Joboffers;
use App\Form\JoboffersType;
use App\Form\CandidatesType;
use App\Form\ClientsType;
use App\Form\ProfilType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;


class AdminPanelController extends AbstractController
{

     /**
     * @Route("/admin", name="admin_pannel")
     */
     public function index()
    {
       
        return $this->render('admin/index.html.twig', []);
    }


     /**
     * @Route("/admin/new_client", name="new_client")
     */
     public function addClient(Request $request, ObjectManager $manager): Response
    {
       $client = New Clients;

       $form = $this->createForm(ClientsType::class, $client);
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
            
        $joboffer->setClient($client);
        $manager->persist($joboffer);
        $manager->flush();

        return $this->redirectToRoute('admin_pannel');
    }

        return $this->render('admin/newclient.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }






    /**
     * @Route("/admin/newjob", name="new_job")
     */
    public function addJob(Request $request, ObjectManager $manager): Response
    {
        


        // $em = $this->getDoctrine()->getRepository(Clients::class);
        // $clients = $em->findAll();
        
        $clients = $this->getDoctrine()
        ->getRepository(Clients::class)
        ->findAll();

        $joboffer = New Joboffers;
        $form = $this->createForm(JoboffersType::class, $joboffer);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
         
            $manager->persist($joboffer);
            $manager->flush();

            $this->addFlash(
                'success',
                'Job créer avec succés !'
            );

            return $this->redirectToRoute('admin_pannel', []);
        }

        return $this->render('admin/newjob.html.twig', [
            'clients' => $clients,
            'form' => $form->createView(),
        ]);
    }
}

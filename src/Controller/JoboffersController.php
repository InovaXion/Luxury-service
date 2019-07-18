<?php

namespace App\Controller;

use App\Entity\Joboffers;
use App\Form\JoboffersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/joboffers")
 */
class JoboffersController extends AbstractController
{
    /**
     * @Route("/", name="joboffers_index", methods={"GET"})
     */
    public function index(): Response
    {
        $joboffers = $this->getDoctrine()
            ->getRepository(Joboffers::class)
            ->findAll();

        return $this->render('joboffers/index.html.twig', [
            'joboffers' => $joboffers,
        ]);
    }

    /**
     * @Route("/new", name="joboffers_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $joboffer = new Joboffers();
        $form = $this->createForm(JoboffersType::class, $joboffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joboffer);
            $entityManager->flush();

            return $this->redirectToRoute('joboffers_index');
        }

        return $this->render('joboffers/new.html.twig', [
            'joboffer' => $joboffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="joboffers_show", methods={"GET"})
     */
    public function show(Joboffers $joboffer): Response
    {
        return $this->render('joboffers/show.html.twig', [
            'joboffer' => $joboffer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="joboffers_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Joboffers $joboffer): Response
    {
        $form = $this->createForm(JoboffersType::class, $joboffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('joboffers_index', [
                'id' => $joboffer->getId(),
            ]);
        }

        return $this->render('joboffers/edit.html.twig', [
            'joboffer' => $joboffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="joboffers_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Joboffers $joboffer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$joboffer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($joboffer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('joboffers_index');
    }
}

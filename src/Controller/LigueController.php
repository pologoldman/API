<?php

namespace App\Controller;

use App\Entity\Ligue;
use App\Form\LigueType;
use App\Repository\LigueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ligue')]
class LigueController extends AbstractController
{
    #[Route('/', name: 'ligue_index', methods: ['GET'])]
    public function index(LigueRepository $ligueRepository): Response
    {
        return $this->render('ligue/index.html.twig', [
            'ligues' => $ligueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'ligue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ligue = new Ligue();
        $form = $this->createForm(LigueType::class, $ligue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ligue);
            $entityManager->flush();

            return $this->redirectToRoute('ligue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligue/new.html.twig', [
            'ligue' => $ligue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'ligue_show', methods: ['GET'])]
    public function show(Ligue $ligue): Response
    {
        return $this->render('ligue/show.html.twig', [
            'ligue' => $ligue,
        ]);
    }

    #[Route('/{id}/edit', name: 'ligue_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ligue $ligue, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LigueType::class, $ligue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('ligue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligue/edit.html.twig', [
            'ligue' => $ligue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'ligue_delete', methods: ['POST'])]
    public function delete(Request $request, Ligue $ligue, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligue->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ligue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ligue_index', [], Response::HTTP_SEE_OTHER);
    }
}

<?php

namespace App\Controller;

use App\Entity\LigueMembre;
use App\Form\LigueMembreType;
use App\Repository\LigueMembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ligue/membre')]
class LigueMembreController extends AbstractController
{
    #[Route('/', name: 'ligue_membre_index', methods: ['GET'])]
    public function index(LigueMembreRepository $ligueMembreRepository): Response
    {
        return $this->render('ligue_membre/index.html.twig', [
            'ligue_membres' => $ligueMembreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'ligue_membre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ligueMembre = new LigueMembre();
        $form = $this->createForm(LigueMembreType::class, $ligueMembre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ligueMembre);
            $entityManager->flush();

            return $this->redirectToRoute('ligue_membre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligue_membre/new.html.twig', [
            'ligue_membre' => $ligueMembre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'ligue_membre_show', methods: ['GET'])]
    public function show(LigueMembre $ligueMembre): Response
    {
        return $this->render('ligue_membre/show.html.twig', [
            'ligue_membre' => $ligueMembre,
        ]);
    }

    #[Route('/{id}/edit', name: 'ligue_membre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, LigueMembre $ligueMembre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LigueMembreType::class, $ligueMembre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('ligue_membre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligue_membre/edit.html.twig', [
            'ligue_membre' => $ligueMembre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'ligue_membre_delete', methods: ['POST'])]
    public function delete(Request $request, LigueMembre $ligueMembre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligueMembre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ligueMembre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ligue_membre_index', [], Response::HTTP_SEE_OTHER);
    }
}

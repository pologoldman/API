<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'movie_index')]
    public function index(MovieRepository $movieRepository): Response
    {
        return $this->render('movie/index.html.twig', [
            'movies' => $movieRepository->findAll()
        ]);
    }

    #[Route('/movie/create', name:'movie_create')]
    public function create(Request $request, EntityManagerInterface $manager)
    {
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($movie);
            $manager->flush();

            return $this->redirectToRoute('movie_show', [
                'id' => $movie->getId()
            ]);
        }

        return $this->render('movie/create.html.twig', [
            'form' => $form->createView()
        ]);

    }
    #[Route('/movie/update/{id}', name:'movie_update')]
    public function update($id, Request $request, EntityManagerInterface $manager): Response
    {
        $movie = $manager->getRepository(Movie::class)->find($id);

        if (!$movie) {
            throw $this->createNotFoundException('The movie does not exist');
        }

        $form = $this->createForm(MovieType::class, $movie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();

            return $this->redirectToRoute('movie_show', [
                'id' => $movie->getId()
            ]);
        }

        return $this->render('movie/update.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/movie/{id}', name: 'movie_show')]
    public function show(Movie $movie): Response
    {
        return $this->render('movie/show.html.twig', [
            'movie' => $movie
        ]);
    }

    #[Route('/movie/delete/{name}/{token}', name: 'movie_delete')]
    public function delete(Movie $movie, $token, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $movie->getId(), $token)) {
            $manager->remove($movie);
            $manager->flush();

            return $this->redirectToRoute('movie_index');
        }

        return $this->createAccessDeniedException('Wesh!!!');
    }
}

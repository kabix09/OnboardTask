<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\ZooService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends Controller
{
    private ZooService $zooService;

    public function __construct(ZooService $zooService)
    {
        $this->zooService = $zooService;
    }

    /**
     * @Route("/animals", name="data")
     */
    public function index(): Response
    {
        $this->zooService->createAnimals();

        $firstPackage = $this->zooService->presentAnimals();

        $this->zooService->randomizeSounds();

        $secondPackage = $this->zooService->presentAnimals();

        return $this->render('animals.html.twig', [
            'firstAnimals' => $firstPackage,
            'secondAnimals' => $secondPackage
        ]);
    }
}

<?php

namespace App\Controller;

use App\Service\RandomDataGeneratorService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends Controller
{
    /**
     * @var RandomDataGeneratorService
     */
    private RandomDataGeneratorService $dataGeneratorService;

    /**
     * @param RandomDataGeneratorService $dataGeneratorService
     */
    public function __construct(RandomDataGeneratorService $dataGeneratorService)
    {
        $this->dataGeneratorService = $dataGeneratorService;
    }

    /**
     * @Route("/data", name="data")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DataController.php',
        ]);
    }
}

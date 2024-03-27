<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response
    {
//        dd($logger);
        $logger->info('Some log');

        $starships = [
            new Starship(
                1,
                'CakePhp',
                'framework',
                'Me',
                'loaded',
            ),
            new Starship(
                2,
                'WordPress',
                'CMS',
                'Ivan',
                'beginning',
            ),
            new Starship(
                3,
                'Symfony',
                'framework',
                'Eugene',
                'finish',
            ),
        ];

        return $this->json($starships);
    }
}
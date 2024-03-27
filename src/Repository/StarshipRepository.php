<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll()
    {
        $this->logger->info('Some log');

        return [
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
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}
<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
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
                StarshipStatusEnum::IN_PROGRESS,
            ),
            new Starship(
                2,
                'WordPress',
                'CMS',
                'Ivan',
                StarshipStatusEnum::COMPLETED,
            ),
            new Starship(
                3,
                'Symfony',
                'framework',
                'Eugene',
                StarshipStatusEnum::WAITING,
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
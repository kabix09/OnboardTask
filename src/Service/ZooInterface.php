<?php
declare(strict_types=1);

namespace App\Service;

use App\Service\Animal\Animal;

interface ZooInterface
{
    public function createAnimals(): void;

    public function presentAnimals(): string;

    public function randomizeSounds(): void;
}

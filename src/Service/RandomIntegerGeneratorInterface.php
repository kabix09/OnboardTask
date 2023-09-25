<?php
declare(strict_types=1);

namespace App\Service;

interface RandomIntegerGeneratorInterface
{
    public function generateRandomInt(): int;
}
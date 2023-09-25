<?php
declare(strict_types=1);

namespace App\Service;

class RandomDataGeneratorService implements RandomStringGeneratorInterface, RandomIntegerGeneratorInterface
{

    /**
     * @throws \Exception
     */
    public function generateRandomInt(): int
    {
        return random_int(0, 9999);
    }

    /**
     * @throws \Exception
     */
    public function generateRandomString(): string
    {
        return random_bytes(15);
    }
}

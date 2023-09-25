<?php
declare(strict_types=1);

namespace App\Service\Animal;

use App\Service\Sound\SoundInterface;

class Cat extends Animal
{
    public function __construct(string $name, int $weight, SoundInterface $sound)
    {
        parent::__construct($name, $weight, $sound);
    }
}

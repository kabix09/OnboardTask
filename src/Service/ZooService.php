<?php
declare(strict_types=1);

namespace App\Service;

use App\Service\Animal\Animal;
use App\Service\Animal\Cat;
use App\Service\Animal\Dog;
use App\Service\Sound\BarkSound;
use App\Service\Sound\MeowSound;
use App\Service\Sound\WoofSound;

class ZooService implements ZooInterface
{
    public readonly array $animals;

    public function createAnimals(): void
    {
        $this->animals = [
            new Dog("Rufus", 30, new WoofSound()),
            new Cat("Filemon", 27, new MeowSound()),
            new Dog("Artur", 34, new WoofSound()),
        ];
    }

    /**
     * @return string
     */
    public function presentAnimals(): string
    {
        $result = "";

        foreach ($this->animals as $animal) {
            $result .= sprintf("Name: %s, Weight: %s, Sound: %s \n",
                $animal->getName(),
                $animal->getWeight(),
                $animal->getSound()->getSound()
            );
        }

        return $result;
    }

    public function randomizeSounds(): void
    {
        $sounds = [
            0 => new MeowSound(),
            1 => new WoofSound(),
            2 => new BarkSound(),
        ];

        /** @var Animal $animal */
        foreach ($this->animals as $animal) {

            $newSound = $sounds[random_int(0, 2)];

            $animal->setSound($newSound);
        }
    }
}

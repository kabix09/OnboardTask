<?php
declare(strict_types=1);

namespace App\Service\Animal;

use App\Service\Sound\SoundInterface;

abstract class Animal
{
    public int $weight;

    public string $name;

    public SoundInterface $sound;

    /**
     * @param SoundInterface $sound
     */
    public function __construct(string $name, int $weight, SoundInterface $sound)
    {
        $this->sound = $sound;
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getSound(): SoundInterface
    {
        return $this->sound;
    }

    public function setSound(SoundInterface $sound): void
    {
        $this->sound = $sound;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}

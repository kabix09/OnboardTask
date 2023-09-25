<?php
declare(strict_types=1);

namespace App\Service\Sound;

class MeowSound implements SoundInterface
{
    public function getSound(): string
    {
        return "meow";
    }
}

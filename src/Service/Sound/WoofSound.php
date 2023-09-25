<?php
declare(strict_types=1);

namespace App\Service\Sound;

class WoofSound implements SoundInterface
{
    public function getSound(): string
    {
        return "woof";
    }
}

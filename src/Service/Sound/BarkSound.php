<?php
declare(strict_types=1);

namespace App\Service\Sound;

class BarkSound implements SoundInterface
{

    public function getSound(): string
    {
        return "bark";
    }
}

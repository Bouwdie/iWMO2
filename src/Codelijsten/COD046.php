<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD046
{
    use Meta;
    private $titel = "GESLACHT";
    private $beschrijving = "Unieke aanduiding van de sexe van een persoon, het niet bekend zijn daarvan, het ontbreken of het niet gespecificeerd zijn.";

    const code = [
        1 => 'MANNELIJK',
        2 => 'VROUWELIJK',
        9 => 'NIET GESPECIFICEERD',
    ];
}
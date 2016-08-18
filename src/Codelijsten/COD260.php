<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD260
{
    use Meta;
    private $titel = "JURIDISCHE STATUS";
    private $beschrijving = "Codering voor ja of nee.";

    const code = [
        1 => 'Ja',
        2 => 'Nee',
    ];
}
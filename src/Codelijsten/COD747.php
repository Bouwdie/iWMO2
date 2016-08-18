<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD747
{
    use Meta;
    private $titel = "COMMUNICATIEVORM";
    private $beschrijving = "Gecodeerde aanduiding van de bijzondere vorm van communicatie die gebruikt dient te worden.";

    const code = [
        1 => 'Tolk taal',
        2 => 'Doventolk',
        3 => 'Doofblindentolk',
    ];
}
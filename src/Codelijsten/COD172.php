<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD172
{
    use Meta;
    private $titel = "REDEN INTREKKING";
    private $beschrijving = "De reden waarom een toewijzing wordt ingetrokken.";

    const code = [
        1 => "Cliënt overleden",
        2 => "Negatief indicatiebesluit",
        3 => "Herindicatie",
        4 => "Overplaatsing",
        6 => "Uitstroom",
    ];
}
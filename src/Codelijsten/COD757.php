<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD757
{
    use Meta;
    private $titel = "SOORT ADRES";
    private $beschrijving = "Nadere typering van het adres.";

    const code = [
        1 => "GBA adres",
        2 => "Correspondentie-adres",
        3 => "Verblijfadres",
        4 => "Tijdelijk verblijfadres",
    ];
}
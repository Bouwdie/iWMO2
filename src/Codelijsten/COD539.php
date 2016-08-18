<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD539
{
    use Meta;
    private $titel = "BEPERKING";
    private $beschrijving = "Aanduiding over de categorie van de beperking.";

    const code = [
        1 => "Sociale redzaamheid",
        2 => "Mobiliteit",
        3 => "Persoonlijke zorg",
        4 => "Huishoudelijk leven",
        5 => "Sociale relaties en maatschappelijk leven",
        6 => "Deelname aan leren, werken",
        9 => "Niet van toepassing",
    ];
}
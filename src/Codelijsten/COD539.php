<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD539
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD539 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "BEPERKING";
    /**
     * @var string
     */
    protected static $beschrijving = "Aanduiding over de categorie van de beperking.";

    /**
     * Beperking
     */
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
<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD757
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD757 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "SOORT ADRES";
    /**
     * @var string
     */
    private $beschrijving = "Nadere typering van het adres.";

    /**
     * Soort adres
     */
    const code = [
        1 => "GBA adres",
        2 => "Correspondentie-adres",
        3 => "Verblijfadres",
        4 => "Tijdelijk verblijfadres",
    ];
}
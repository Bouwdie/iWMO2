<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class WMO756
 * @package Hyperized\Iwmo2\Codelijsten
 */
class WMO756 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "EENHEID";
    /**
     * @var string
     */
    private $beschrijving = "Gecodeerde aanduiding van de mate van zorg betreffende een product, uitgedrukt in een eenheid.";

    /**
     * Eenheid
     */
    const code = [
        '01' => "Minuut",
        '04' => "Uur",
        '14' => "Etmaal",
        '16' => "Dagdeel (4 uur)",
        '82' => "Stuks",
        '83' => "Euro's",
    ];
}
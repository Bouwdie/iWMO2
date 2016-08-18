<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class WMO756
{
    use Meta;
    private $titel = "EENHEID";
    private $beschrijving = "Gecodeerde aanduiding van de mate van zorg betreffende een product, uitgedrukt in een eenheid.";

    const code = [
        '01' => "Minuut",
        '04' => "Uur",
        '14' => "Etmaal",
        '16' => "Dagdeel (4 uur)",
        '82' => "Stuks",
        '83' => "Euro's",
    ];
}
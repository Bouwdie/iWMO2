<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class WMO757
 * @package Hyperized\Iwmo2\Codelijsten
 */
class WMO757 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "FREQUENTIE";
    /**
     * @var string
     */
    private $beschrijving = "Frequentie van de te leveren of geleverde ondersteuning.";

    /**
     * Frequentie
     */
    const code = [
        1 => "Per dag",
        2 => "Per week",
        3 => "Per vier weken",
        4 => "Per maand",
        5 => "Per jaar",
        6 => "Totaal binnen geldigheidsduur beschikking",
    ];
}
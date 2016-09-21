<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD478
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD478 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "LEEFEENHEID";
    /**
     * @var string
     */
    private $beschrijving = "Gecodeerde aanduiding van de leefsituatie van een cliënt.";

    /**
     * Leefeenheid
     */
    const code = [
        1 => "WOONT ALLEEN EN ZELFSTANDIG (EENPERSOONSHUISHOUDEN)",
        2 => "WOONT ALS KIND SAMEN MET OUDER(S) IN OUDERLIJK HUIS",
        3 => "HEEFT EEN ZELFSTANDIG HUISHOUDEN MET UITSLUITEND PARTNER",
        4 => "HEEFT EEN HUISHOUDEN MET PARTNER EN THUISWONENDE KINDEREN",
        5 => "HEEFT EEN HUISHOUDEN VAN VOLWASSENE MET 1 OF MEER KINDEREN",
        6 => "EEN ANDER MEERPERSOONSHUISHOUDEN",
        7 => "WOONT IN EEN ZORGINSTELLING MET VERBLIJF",
        9 => "ONBEKEND",
    ];
}
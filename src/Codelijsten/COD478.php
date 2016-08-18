<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD478
{
    use Meta;
    private $titel = "LEEFEENHEID";
    private $beschrijving = "Gecodeerde aanduiding van de leefsituatie van een cliënt.";

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
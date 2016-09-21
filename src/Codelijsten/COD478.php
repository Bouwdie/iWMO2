<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD478 implements Enumeration
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

    public function __construct() {
        $this->setWaarde(self::code);
    }

    /**
     * @return array
     */
    public function getWaarde(): array
    {
        return $this->waarde;
    }

    /**
     * @param array $waarde
     */
    public function setWaarde(array $waarde)
    {
        $this->waarde = $waarde;
    }
}
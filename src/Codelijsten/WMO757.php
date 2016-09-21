<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class WMO757 implements Enumeration
{
    use Meta;
    private $titel = "FREQUENTIE";
    private $beschrijving = "Frequentie van de te leveren of geleverde ondersteuning.";

    const code = [
        1 => "Per dag",
        2 => "Per week",
        3 => "Per vier weken",
        4 => "Per maand",
        5 => "Per jaar",
        6 => "Totaal binnen geldigheidsduur beschikking",
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
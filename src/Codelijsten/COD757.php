<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD757 implements Enumeration
{
    use Meta;
    private $titel = "SOORT ADRES";
    private $beschrijving = "Nadere typering van het adres.";

    const code = [
        1 => "GBA adres",
        2 => "Correspondentie-adres",
        3 => "Verblijfadres",
        4 => "Tijdelijk verblijfadres",
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
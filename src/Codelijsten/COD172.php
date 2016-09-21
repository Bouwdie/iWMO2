<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD172 implements Enumeration
{
    use Meta;
    private $titel = "REDEN INTREKKING";
    private $beschrijving = "De reden waarom een toewijzing wordt ingetrokken.";

    const code = [
        1 => "Cliënt overleden",
        2 => "Negatief indicatiebesluit",
        3 => "Herindicatie",
        4 => "Overplaatsing",
        6 => "Uitstroom",
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
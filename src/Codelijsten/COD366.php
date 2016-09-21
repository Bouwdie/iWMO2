<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD366 implements Enumeration
{
    use Meta;
    private $titel = "BURGERLIJKE STAAT";
    private $beschrijving = "Unieke aanduiding die de rechtspositie van een cliënt al dan niet in relatie tot één of meer personen beschrijft.";

    const code = [
        1 => "Ongehuwd en geen geregistreerd partner en nooit gehuwd of geregistreerd partner geweest",
        2 => "Gehuwd",
        3 => "Gescheiden",
        4 => "Weduwe/weduwnaar",
        5 => "Geregistreerd partner",
        6 => "Gescheiden geregistreerd partner",
        7 => "Achtergebleven geregistreerd partner",
        9 => "Ongehuwd en geen geregistreerd partner, eventueel wel gehuwd of geregistreerd partner geweest",
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
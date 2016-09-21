<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD327 implements Enumeration
{
    use Meta;
    private $titel = "CODE VERWIJZER";
    private $beschrijving = "Aanduiding van de aard van de (zelf)verwijzer.";

    const code = [
        '01' => "Gemeente",
        '02' => "Huisarts",
        '03' => "Jeugdarts",
        '04' => "Gecertificeerde instelling",
        '05' => "Medisch specialist",
        '06' => "Zelfverwijzer/geen verwijzer",
        '07' => "Onbekend",
        '08' => "Rechter, Raad voor de Kinderbescherming of Officier van Justitie",
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
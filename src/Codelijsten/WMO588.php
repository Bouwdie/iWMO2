<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class WMO588 implements Enumeration
{
    use Meta;
    private $titel = "REDENBEEINDIGING";
    private $beschrijving = "De reden van beëindiging van de Wmo-ondersteuning bij een cliënt.";

    const code = [
        '02' => "Overlijden",
        '19' => "Levering zorg of ondersteuning is beëindigd - toewijzing sluiten",
        '20' => "Levering zorg of ondersteuning is beëindigd - toewijzing aanhouden",
        '31' => "Verhuizing naar een andere gemeente",
        '32' => "Voortzetting ondersteuning in sociale basisondersteuning",
        '33' => "Voortzetting in Zvw",
        '34' => "Voortzetting in Wlz",
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
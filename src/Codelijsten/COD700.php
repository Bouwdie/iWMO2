<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD700 implements Enumeration
{
    use Meta;
    private $titel = "NAAMCODE";
    private $beschrijving = "Aanduiding naamgebruik (gecodeerd).";

    const code = [
        1 => 'Eigen naam',
        2 => 'Naam echtgenoot of geregistreerd partner of alternatieve naam',
        3 => 'Naam echtgenoot of geregistreerd partner gevolgd door eigen naam',
        4 => 'Eigen naam gevolgd door naam echtgenoot of geregistreerd partner',
        5 => 'Pseudoniem',
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
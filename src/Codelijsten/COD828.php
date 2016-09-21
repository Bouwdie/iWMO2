<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD828 implements Enumeration
{
    use Meta;
    private $titel = "SCORE VRAAG BEPERKING";
    private $beschrijving = "Gecodeerde aanduiding van de score op een vraag over een beperking.";

    const code = [
        0 => "Kan deze activiteit zelf, er is geen hulp van een ander nodig",
        1 => "Kan het zelf, maar iemand anders moet toezien of stimuleren",
        2 => "Kan dit slechts met veel moeite/iemand anders moet helpen",
        3 => "Kan dit niet zelfstandig/iemand anders moet dit overnemen",
        9 => "Niet beoordeeld",
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
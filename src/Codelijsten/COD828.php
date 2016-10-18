<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD828
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD828 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "SCORE VRAAG BEPERKING";
    /**
     * @var string
     */
    protected static $beschrijving = "Gecodeerde aanduiding van de score op een vraag over een beperking.";

    /**
     * Score vraag beperking
     */
    const code = [
        0 => "Kan deze activiteit zelf, er is geen hulp van een ander nodig",
        1 => "Kan het zelf, maar iemand anders moet toezien of stimuleren",
        2 => "Kan dit slechts met veel moeite/iemand anders moet helpen",
        3 => "Kan dit niet zelfstandig/iemand anders moet dit overnemen",
        9 => "Niet beoordeeld",
    ];
}
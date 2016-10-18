<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD700
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD700 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "NAAMCODE";
    /**
     * @var string
     */
    protected static $beschrijving = "Aanduiding naamgebruik (gecodeerd).";

    /**
     * Naamcode
     */
    const code = [
        1 => 'Eigen naam',
        2 => 'Naam echtgenoot of geregistreerd partner of alternatieve naam',
        3 => 'Naam echtgenoot of geregistreerd partner gevolgd door eigen naam',
        4 => 'Eigen naam gevolgd door naam echtgenoot of geregistreerd partner',
        5 => 'Pseudoniem',
    ];
}
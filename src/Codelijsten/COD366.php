<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD366
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD366 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "BURGERLIJKE STAAT";
    /**
     * @var string
     */
    protected static $beschrijving = "Unieke aanduiding die de rechtspositie van een cliënt al dan niet in relatie tot één of meer personen beschrijft.";

    /**
     * Burgelijke staat
     */
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
}
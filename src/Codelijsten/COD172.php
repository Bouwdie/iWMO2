<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD172
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD172 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "REDEN INTREKKING";
    /**
     * @var string
     */
    protected static $beschrijving = "De reden waarom een toewijzing wordt ingetrokken.";

    /**
     * Reden uitkering
     */
    const code = [
        1 => "Cliënt overleden",
        2 => "Negatief indicatiebesluit",
        3 => "Herindicatie",
        4 => "Overplaatsing",
        6 => "Uitstroom",
    ];
}
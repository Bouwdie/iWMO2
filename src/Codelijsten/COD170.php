<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD170
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD170 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "DATUMGEBRUIK";
    /**
     * @var string
     */
    protected static $beschrijving = "Aanduiding van (het gedeelte van) een geboortedatum dat bekend is.";

    /**
     * Datumgebruik
     */
    const code = [
        1 => "dag onbekend; alleen maand en jaar gebruiken",
        2 => "dag en maand onbekend; alleen jaar gebruiken",
        3 => "dag, maand en jaar onbekend; onbekende datum",
    ];
}
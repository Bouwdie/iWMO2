<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD327
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD327 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "CODE VERWIJZER";
    /**
     * @var string
     */
    private $beschrijving = "Aanduiding van de aard van de (zelf)verwijzer.";

    /**
     * Code verwijzer
     */
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
}
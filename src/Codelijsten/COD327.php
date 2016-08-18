<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD327
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
}
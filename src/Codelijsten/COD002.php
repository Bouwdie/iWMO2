<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD002
{
    use Meta;
    private $titel = "BERICHT";
    private $beschrijving = "Code ter identificatie van een (soort) (externe-integratie)bericht.";

    const code = [
        414 => 'Toewijzing Wmo-ondersteuning',
        415 => 'Toewijzing Wmo-ondersteuning Retour',
        416 => 'Wmo Declaratie',
        417 => 'Wmo Declaratie Retour',
        418 => 'Start Wmo-ondersteuning',
        419 => 'Start Wmo-ondersteuning Retour',
        420 => 'Stop Wmo-ondersteuning',
        421 => 'Stop Wmo-ondersteuning Retour',
        444 => 'Verzoek om toewijzing Wmo-ondersteuning',
        445 => 'Verzoek om toewijzing Wmo-ondersteuning Retour',
        448 => 'Factuur Wmo-ondersteuning',
        449 => 'Factuur Wmo-ondersteuning Retour',
    ];
}
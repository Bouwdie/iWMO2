<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

abstract class COD736
{
    use Meta;
    private $titel = "GRONDSLAG ZORG";
    private $beschrijving = "Codering die aangeeft wat ten grondslag ligt aan de zorg.";

    const code = [
        '01' => "SOMATISCHE ZIEKTE/AANDOENING",
        '02' => "PSYCHOGERIATRISCHE ZIEKTE/AANDOENING",
        '03' => "PSYCHIATRISCHE AANDOENING, PSYCHISCHE STOORNIS",
        '04' => "LICHAMELIJKE HANDICAP (FUNCTIESTOORNIS)",
        '05' => "VERSTANDELIJKE HANDICAP (FUNCTIESTOORNIS)",
        '06' => "ZINTUIGLIJKE HANDICAP (FUNCTIESTOORNIS)",
        '07' => "PSYCHOSOCIALE PROBLEMEN",
    ];
}
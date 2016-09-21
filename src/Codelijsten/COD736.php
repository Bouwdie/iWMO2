<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD736
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD736 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "GRONDSLAG ZORG";
    /**
     * @var string
     */
    private $beschrijving = "Codering die aangeeft wat ten grondslag ligt aan de zorg.";

    /**
     * Grondslag zorg
     */
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
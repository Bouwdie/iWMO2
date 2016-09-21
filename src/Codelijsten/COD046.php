<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD046
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD046 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "GESLACHT";
    /**
     * @var string
     */
    private $beschrijving = "Unieke aanduiding van de sexe van een persoon, het niet bekend zijn daarvan, het ontbreken of het niet gespecificeerd zijn.";

    /**
     * Geslacht
     */
    const code = [
        1 => 'MANNELIJK',
        2 => 'VROUWELIJK',
        9 => 'NIET GESPECIFICEERD',
    ];
}
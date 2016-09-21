<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD260
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD260 extends AbstractEnumeration
{
    /**
     * @var string
     */
    private $titel = "JA OF NEE";
    /**
     * @var string
     */
    private $beschrijving = "Codering voor ja of nee.";

    /**
     * Ja of Nee
     */
    const code = [
        1 => 'Ja',
        2 => 'Nee',
    ];
}
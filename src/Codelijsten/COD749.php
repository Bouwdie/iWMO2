<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD749
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD749 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected $titel = "DUUR";
    /**
     * @var string
     */
    protected static $beschrijving = "Code die aangeeft wat de verwachte duur is van de categorie beperking.";

    /**
     * Duur
     */
    const code = [
        1 => "Korter dan drie maanden",
        2 => "Drie tot zes maanden",
        3 => "Zes tot twaalf maanden",
        4 => "Langer dan een jaar",
    ];
}
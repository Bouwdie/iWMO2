<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class COD747
 * @package Hyperized\Iwmo2\Codelijsten
 */
class COD747 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "COMMUNICATIEVORM";
    /**
     * @var string
     */
    protected static $beschrijving = "Gecodeerde aanduiding van de bijzondere vorm van communicatie die gebruikt dient te worden.";

    /**
     * Communicatievorm
     */
    const code = [
        1 => 'Tolk taal',
        2 => 'Doventolk',
        3 => 'Doofblindentolk',
    ];
}
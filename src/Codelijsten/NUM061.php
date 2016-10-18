<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Class NUM061
 * @package Hyperized\Iwmo2\Codelijsten
 */
class NUM061 extends AbstractEnumeration
{
    /**
     * @var string
     */
    protected static $titel = "AANDUIDING WOONADRES";
    /**
     * @var string
     */
    protected static $beschrijving = "De aanduiding die wordt gebruikt voor adressen die niet zijn voorzien van de gebruikelijke straatnaam en huisnummeraanduidingen.";

    /**
     * Aanduiding woonadres
     */
    const code = [
        'AB' => 'Aan boord',
        'BY' => 'Bij',
        'TO' => 'Tegenover',
        'WW' => 'Woonwagen',
    ];
}
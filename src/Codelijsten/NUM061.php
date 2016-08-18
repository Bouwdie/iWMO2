<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class NUM061
{
    use Meta;
    private $titel = "AANDUIDING WOONADRES";
    private $beschrijving = "De aanduiding die wordt gebruikt voor adressen die niet zijn voorzien van de gebruikelijke straatnaam en huisnummeraanduidingen.";

    const code = [
        'AB' => 'Aan boord',
        'BY' => 'Bij',
        'TO' => 'Tegenover',
        'WW' => 'Woonwagen',
    ];
}
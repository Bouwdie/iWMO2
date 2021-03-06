<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class NUM061
 * @package Hyperized\Iwmo2\Codelijsten
 */
class NUM061 implements Enumeration
{
    use Meta;
    /**
     * @var string
     */
    private $titel = "AANDUIDING WOONADRES";
    /**
     * @var string
     */
    private $beschrijving = "De aanduiding die wordt gebruikt voor adressen die niet zijn voorzien van de gebruikelijke straatnaam en huisnummeraanduidingen.";
    /**
     * @var
     */
    private $waarde;

    const code = [
        'AB' => 'Aan boord',
        'BY' => 'Bij',
        'TO' => 'Tegenover',
        'WW' => 'Woonwagen',
    ];

    /**
     * NUM061 constructor.
     */
    public function __construct() {
        $this->setWaarde(self::code);
    }

    /**
     * @return array
     */
    public function getWaarde(): array
    {
        return $this->waarde;
    }

    /**
     * @param array $waarde
     */
    public function setWaarde(array $waarde)
    {
        $this->waarde = $waarde;
    }
}
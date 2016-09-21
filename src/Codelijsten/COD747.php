<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD747 implements Enumeration
{
    use Meta;
    private $titel = "COMMUNICATIEVORM";
    private $beschrijving = "Gecodeerde aanduiding van de bijzondere vorm van communicatie die gebruikt dient te worden.";

    const code = [
        1 => 'Tolk taal',
        2 => 'Doventolk',
        3 => 'Doofblindentolk',
    ];

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
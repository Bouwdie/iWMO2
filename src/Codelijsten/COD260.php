<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD260 implements Enumeration
{
    use Meta;
    private $titel = "JURIDISCHE STATUS";
    private $beschrijving = "Codering voor ja of nee.";

    const code = [
        1 => 'Ja',
        2 => 'Nee',
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
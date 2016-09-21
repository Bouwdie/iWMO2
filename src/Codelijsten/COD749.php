<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD749 implements Enumeration
{
    use Meta;
    private $titel = "DUUR";
    private $beschrijving = "Code die aangeeft wat de verwachte duur is van de categorie beperking.";

    const code = [
        1 => "Korter dan drie maanden",
        2 => "Drie tot zes maanden",
        3 => "Zes tot twaalf maanden",
        4 => "Langer dan een jaar",
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
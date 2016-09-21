<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

class COD467 implements Enumeration
{
    use Meta;
    private $titel = "STATUS AANLEVERING";
    private $beschrijving = "Indicatie over de status van de informatie in het record.";

    const code = [
        1 => "Eerste aanlevering",
        2 => "Gewijzigde aanlevering",
        3 => "Verwijderen aanlevering",
        9 => "Niet van toepassing (ongewijzigd)",
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
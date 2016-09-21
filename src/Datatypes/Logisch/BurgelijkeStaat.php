<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class BurgelijkeStaat
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class BurgelijkeStaat
{
    use Meta;

    /**
     * @var null
     */
    private $waarde = null;

    /**
     * BurgelijkeStaat constructor.
     * @param string $waarde
     */
    public function __construct(string $waarde)
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return Tekst|null
     */
    public function getWaarde(): Tekst
    {
        return $this->waarde;
    }

    /**
     * @param Tekst|null|string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = new Tekst($waarde, null, 'COD366', 1, null);
    }

}
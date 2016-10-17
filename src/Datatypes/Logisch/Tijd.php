<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Tijd
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Tijd extends AbstractLogischString
{
    /**
     * @var string
     */
    private $beschrijving = "Tijd";

    /**
     * @return \Hyperized\Iwmo2\Datatypes\Primitief\Tijd
     */
    public function getWaarde(): \Hyperized\Iwmo2\Datatypes\Primitief\Tijd
    {
        return $this->waarde;
    }

    /**
     * @param string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = new \Hyperized\Iwmo2\Datatypes\Primitief\Tijd($waarde);
    }
}
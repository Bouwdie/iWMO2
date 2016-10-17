<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Class Datum
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Datum extends AbstractLogischString
{
    /**
     * @var string
     */
    private $beschrijving = "Datum";

    /**
     * @return \Hyperized\Iwmo2\Datatypes\Primitief\Tijd
     */
    public function getWaarde(): \Hyperized\Iwmo2\Datatypes\Primitief\Datum
    {
        return $this->waarde;
    }

    /**
     * @param string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = new \Hyperized\Iwmo2\Datatypes\Primitief\Datum($waarde);
    }
}
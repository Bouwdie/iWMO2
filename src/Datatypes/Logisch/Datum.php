<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Datum as PrimitiefDatum;

/**
 * Class Datum
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Datum extends AbstractLogischString
{
    /**
     * @var string
     */
    protected static $beschrijving = "Datum";

    /**
     * @return PrimitiefDatum
     */
    public function getValue(): PrimitiefDatum
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = new PrimitiefDatum($value);
    }
}
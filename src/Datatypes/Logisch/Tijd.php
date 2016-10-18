<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tijd as PrimitiefTijd;

/**
 * Class Tijd
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class Tijd extends AbstractLogischString
{
    /**
     * @var string
     */
    protected static $beschrijving = "Tijd";

    /**
     * @return \Hyperized\Iwmo2\Datatypes\Primitief\Tijd
     */
    public function getValue(): PrimitiefTijd
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = new PrimitiefTijd($value);
    }
}
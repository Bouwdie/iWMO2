<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogisch
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogisch implements Logisch
{
    use Meta;

    /**
     * @var null
     */
    protected $value = null;

    /**
     * AbstractLogisch constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
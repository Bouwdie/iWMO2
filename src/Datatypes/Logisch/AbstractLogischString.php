<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogischString
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogischString implements LogischString
{
    use Meta;

    /**
     * @var null
     */
    protected $value = null;

    /**
     * AbstractLogischString constructor.
     * @param string $value
     */
    public function __construct(string $value)
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
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
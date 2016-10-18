<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Nummer;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogischInteger
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogischInteger implements LogischInteger
{
    use Meta;

    /**
     * @var null
     */
    protected $value = null;
    /**
     * @var null
     */
    protected $minInclusive = null;
    /**
     * @var null
     */
    protected $maxInclusive = null;

    /**
     * AbstractLogischInteger constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue()->getValue();
    }

    /**
     * @return Nummer
     */
    public function getValue(): Nummer
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value)
    {
        $this->value = new Nummer($value, $this->maxInclusive, $this->minInclusive);
    }
}
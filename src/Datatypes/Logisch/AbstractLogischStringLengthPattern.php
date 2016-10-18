<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogischStringLengthPattern
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogischStringLengthPattern implements LogischString
{
    use Meta;

    /**
     * @var null
     */
    protected $value = null;

    /**
     * @var null
     */
    protected $maxLength = null;

    /**
     * @var null
     */
    protected $pattern = null;

    /**
     * AbstractLogischStringLength constructor.
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
     * @return Tekst
     */
    public function getValue(): Tekst
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = new Tekst($value, null, $this->maxLength, $this->pattern);
    }
}
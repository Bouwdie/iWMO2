<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogischStringLength
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogischStringLength implements LogischString
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
        return (string) $this->getValue();
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
        $this->value = new Tekst($value, null, $this->maxLength, null);
    }
}
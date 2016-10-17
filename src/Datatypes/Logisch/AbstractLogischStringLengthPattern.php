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
    protected $waarde = null;

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
     * @param string $waarde
     */
    public function __construct(string $waarde)
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return Tekst
     */
    public function getWaarde(): Tekst
    {
        return $this->waarde;
    }

    /**
     * @param string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = new Tekst($waarde, null, $this->maxLength, $this->pattern);
    }
}
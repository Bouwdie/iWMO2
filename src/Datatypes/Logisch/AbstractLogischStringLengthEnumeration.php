<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractLogischStringLengthEnumeration
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
abstract class AbstractLogischStringLengthEnumeration implements LogischString
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
    protected $enumeration = null;

    /**
     * AbstractLogischStringLengthEnumeration constructor.
     * @param string $waarde
     */
    public function __construct(string $waarde)
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getWaarde();
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
        $this->waarde = new Tekst($waarde, $this->enumeration, $this->maxLength, null);
    }
}
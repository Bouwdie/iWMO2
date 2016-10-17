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
    protected $waarde = null;

    /**
     * AbstractLogischString constructor.
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
        return $this->getWaarde();
    }

    /**
     * @return null
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * @param string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = $waarde;
    }
}
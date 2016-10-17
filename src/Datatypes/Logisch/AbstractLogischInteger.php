<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

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
    protected $waarde = null;
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
     * @param int $waarde
     */
    public function __construct(int $waarde)
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return Nummer
     */
    public function getWaarde(): Nummer
    {
        return $this->waarde;
    }

    /**
     * @param int $waarde
     */
    public function setWaarde(int $waarde)
    {
        $this->waarde = new Nummer($waarde, $this->maxInclusive, $this->minInclusive);
    }
}
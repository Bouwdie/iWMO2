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
    protected $waarde = null;

    /**
     * AbstractLogisch constructor.
     */
    public function __construct()
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return null
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * @param $waarde
     */
    public function setWaarde($waarde)
    {
        $this->waarde = $waarde;
    }
}
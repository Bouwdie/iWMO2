<?php

namespace Hyperized\Iwmo2\Codelijsten;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AbstractEnumeration
 * @package Hyperized\Iwmo2\Codelijsten
 */
abstract class AbstractEnumeration implements Enumeration
{
    use Meta;

    /**
     * @const array
     */
    const code = [];
    /**
     * @var
     */
    protected $waarde;

    /**
     * AbstractEnumeration constructor.
     */
    public function __construct()
    {
        $this->setWaarde(static::code);
    }

    /**
     * @return array
     */
    public function getWaarde(): array
    {
        return $this->waarde;
    }

    /**
     * @param array $waarde
     */
    public function setWaarde(array $waarde)
    {
        $this->waarde = $waarde;
    }
}
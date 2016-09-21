<?php

namespace Hyperized\Iwmo2\Codelijsten;

abstract class AbstractEnumeration implements Enumeration
{
    const code = [];
    protected $waarde;

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
<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Interface Logisch
 * @package Hyperized\Iwmo2\Logisch
 */
interface LogischString
{
    /**
     * Enumeration constructor.
     */
    public function __construct(string $waarde);
    public function __toString();

    /**
     * @return array
     */
    public function getWaarde();

    /**
     * @param $waarde
     */
    public function setWaarde(string $waarde);
}
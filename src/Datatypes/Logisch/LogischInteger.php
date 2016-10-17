<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Interface LogischInteger
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
interface LogischInteger
{
    /**
     * Enumeration constructor.
     */
    public function __construct(int $waarde);
    public function __toString();

    /**
     * @return array
     */
    public function getWaarde();

    /**
     * @param $waarde
     */
    public function setWaarde(int $waarde);
}
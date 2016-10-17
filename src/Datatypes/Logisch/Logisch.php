<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Interface Logisch
 * @package Hyperized\Iwmo2\Logisch
 */
interface Logisch
{
    /**
     * Enumeration constructor.
     */
    public function __construct();

    /**
     * @return array
     */
    public function getWaarde();

    /**
     * @param $waarde
     */
    public function setWaarde($waarde);
}
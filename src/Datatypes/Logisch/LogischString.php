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
     * @param string $value
     */
    public function __construct(string $value);
    public function __toString();

    /**
     * @return array
     */
    public function getValue();

    /**
     * @param $value
     */
    public function setValue(string $value);
}
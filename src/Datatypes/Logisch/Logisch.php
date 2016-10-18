<?php

namespace Hyperized\Iwmo2\Datatypes\Logisch;

/**
 * Interface Logisch
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
interface Logisch
{
    /**
     * Enumeration constructor.
     * @param $value
     */
    public function __construct($value);

    /**
     * @return mixed
     */
    public function __toString();

    /**
     * @return array
     */
    public function getValue();

    /**
     * @param $value
     */
    public function setValue($value);
}
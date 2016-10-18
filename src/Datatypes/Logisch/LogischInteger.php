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
     * @param int $value
     */
    public function __construct(int $value);

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
    public function setValue(int $value);
}
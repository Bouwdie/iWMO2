<?php

namespace Hyperized\Iwmo2\Codelijsten;

/**
 * Interface Enumeration
 * @package Hyperized\Iwmo2\Codelijsten
 */
interface Enumeration
{
    /**
     * Enumeration constructor.
     */
    public function __construct();

    /**
     * @return array
     */
    public function getValue(): array;

    /**
     * @param array $value
     */
    public function setValue(array $value);
}
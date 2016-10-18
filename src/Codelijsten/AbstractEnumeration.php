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
    protected $value;

    /**
     * AbstractEnumeration constructor.
     */
    public function __construct()
    {
        $this->setValue(static::code);
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param array $value
     */
    public function setValue(array $value)
    {
        $this->value = $value;
    }
}
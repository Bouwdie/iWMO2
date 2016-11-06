<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Codelijsten\Enumeration;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Tekst
 * @package Hyperized\Iwmo2\Datatypes\Primitief
 */
class Tekst
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Tekst';
    /**
     * @var null
     */
    protected $value = null;
    /**
     * @var int
     */
    protected $maxLength = 255;
    /**
     * @var null
     */
    protected $restrictions = null;
    /**
     * @var null
     */
    protected $enumerations = null;
    /**
     * @var null
     */
    protected $enumValue = null;
    /**
     * @var null
     */
    protected $pattern = null;

    /**
     * Tekst constructor.
     * @param string $value
     * @param string|null $enumeration
     * @param int|null $maxLength
     * @param string|null $pattern
     * @internal param null|string $restrictions
     */
    public function __construct(
        string $value,
        string $enumeration = null,
        int $maxLength = null,
        string $pattern = null
    ) {
        if (!is_null($maxLength)) {
            $this->setMaxLength($maxLength);
        }
        $this->setValue($value);
        if (!is_null($enumeration)) {
            $this->setEnumerations($enumeration);
        }
        if (!is_null($pattern)) {
            $this->setPattern($pattern);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        if (strlen($value) > $this->maxLength) {
            throw new \InvalidArgumentException('Opgegeven value is groter dan ' . $this->maxLength . ' in primitief datatype ' . $this::$beschrijving);
        }
        $this->value = $value;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @return string
     */
    public function getEnumerations(): string
    {
        return $this->enumerations;
    }

    /**
     * @param string $enumerations
     *
     * @throws \InvalidArgumentException
     */
    public function setEnumerations(string $enumerations)
    {
        $enumName = 'Hyperized\\Iwmo2\\Codelijsten\\' . $enumerations; // ew

        if (!class_exists($enumName)) {
            throw new \InvalidArgumentException('Opgegeven lijst ' . $enumerations . ' bestaat niet.');
        }

        if (!in_array(Enumeration::class, class_implements($enumName), true)) {
            throw new \InvalidArgumentException('Opgegeven lijst ' . $enumerations . ' bestaat niet.');
        }

        /** @var Enumeration $enum $enum */
        $enum = new $enumName();

        if (!array_key_exists($this->getValue(), $enum->getValue())) {
            throw new \InvalidArgumentException('Opgegeven value niet in ' . $enumerations . ' lijst.');
        }

        $this->enumerations = $enum;
        $this->setEnumValue();
    }

    /**
     * @return null|string
     */
    public function getEnumValue(): string
    {
        return $this->enumValue;
    }

    /**
     * @internal param null $enumValue
     */
    public function setEnumValue()
    {
        $enumValue = $this->enumerations->getValue();
        $this->enumValue = $enumValue[ $this->value ];
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern(string $pattern)
    {
        preg_match('/' . $pattern . '/', $this->value, $matches);
        if (!in_array($this->value, $matches)) {
            throw new \InvalidArgumentException('Opgegeven value past niet in patroon: ' . $pattern . '.');
        }
        $this->pattern = $pattern;
    }
}
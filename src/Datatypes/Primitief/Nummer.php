<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Nummer
 * @package Hyperized\Iwmo2\Datatypes\Primitief
 */
class Nummer
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Nummer';
    /**
     * @var null
     */
    private $value;
    /**
     * @var int
     */
    private $maxValue = PHP_INT_MAX;
    /**
     * @var int
     */
    private $minValue = PHP_INT_MIN;

    /**
     * Nummer constructor.
     * @param int $value
     * @param int|null $maxValue
     * @param int|null $minValue
     */
    public function __construct(
        int $value,
        int $maxValue = null,
        int $minValue = null
    ) {
        if (!is_null($maxValue)) {
            $this->setMaxValue($maxValue);
        }
        if (!is_null($minValue)) {
            $this->setMinValue($minValue);
        }
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }

    /**
     * @return int
     */
    public function getMinValue(): int
    {
        return $this->minValue;
    }

    /**
     * @param int $minValue
     */
    public function setMinValue(int $minValue)
    {
        $this->minValue = $minValue;
    }

    /**
     * @return int
     */
    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue(int $maxValue)
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value)
    {
        if ($value < $this->minValue) {
            throw new \InvalidArgumentException('Primitieve Datatype \'' . $this->beschrijving . '\' heeft de minimale value (\'' . $this->minValue . '\') niet bereikt.');
        }
        if ($value > $this->maxValue) {
            throw new \InvalidArgumentException('Primitieve Datatype \'' . $this->beschrijving . '\' heeft de maximale value (\'' . $this->maxValue . '\') overschreden.');
        }
        $this->value = $value;
    }
}
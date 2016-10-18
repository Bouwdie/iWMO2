<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Datum
 * @package Hyperized\Iwmo2\Datatypes\Primitief
 */
class Datum
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'Datum';
    /**
     * @var string
     */
    protected $formaat = 'Y-m-d'; // 2016-02-18
    /**
     * @var null
     */
    protected $value;

    /**
     * Datum constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->setValue($value);
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
    public function setValue(string $value)
    {
        if (\DateTime::createFromFormat($this->formaat, $value) === false) {
            throw new \InvalidArgumentException('Primitieve Datatype \'' . $this::$beschrijving . '\' met een invalide formaat opgegeven.');
        }
        $errors = \DateTime::getLastErrors();
        if (!empty($errors['warning_count'])) {
            throw new \InvalidArgumentException('Primitieve Datatype \'' . $this::$beschrijving . '\' met een invalide tijd buiten bereik.');
        }
        $this->value = $value;
    }
}
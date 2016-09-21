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
    private $beschrijving = 'Tekst';
    /**
     * @var null
     */
    private $waarde = null;
    /**
     * @var int
     */
    private $maxLength = 255;
    /**
     * @var null
     */
    private $restrictions = null;
    /**
     * @var null
     */
    private $enumerations = null;
    /**
     * @var null
     */
    private $enumWaarde = null;
    /**
     * @var null
     */
    private $pattern = null;

    /**
     * Tekst constructor.
     * @param string $waarde
     * @param string|null $restrictions
     * @param string|null $enumeration
     * @param int|null $maxLength
     * @param string|null $pattern
     */
    public function __construct(string $waarde,
                                string $restrictions = null,
                                string $enumeration = null,
                                int $maxLength = null,
                                string $pattern = null) {
        if(!is_null($maxLength)) {
            $this->setMaxLength($maxLength);
        }
        $this->setWaarde($waarde);
        if(!is_null($restrictions)) {
            $this->setRestrictions($restrictions);
        }
        if(!is_null($enumeration)) {
            $this->setEnumerations($enumeration);
        }
        if(!is_null($pattern)) {
            $this->setPattern($pattern);
        }
    }

    /**
     * @return string
     */
    public function getWaarde(): string
    {
        return $this->waarde;
    }

    /**
     * @param $waarde
     */
    public function setWaarde($waarde)
    {
        if(strlen($waarde) > $this->maxLength) {
            throw new \InvalidArgumentException('Opgegeven waarde is groter dan ' . $this->maxLength .' in primitief datatype ' .$this->beschrijving);
        }
        $this->waarde = $waarde;
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
    public function getRestrictions(): string
    {
        return $this->restrictions;
    }

    /**
     * @param string $restrictions
     */
    public function setRestrictions(string $restrictions)
    {
        $this->restrictions = $restrictions;
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
        $enumName = 'Hyperized\\Iwmo2\\Codelijsten\\'.$enumerations; // ew

        if (!class_exists($enumName)) {
            throw new \InvalidArgumentException('Opgegeven lijst ' . $enumerations . ' bestaat niet.');
        }

        if (!in_array(Enumeration::class, class_implements($enumName), true)) {
            throw new \InvalidArgumentException('Opgegeven lijst ' . $enumerations . ' bestaat niet.');
        }

        /** @var Enumeration $enum $enum */
        $enum = new $enumName();

        if(!array_key_exists($this->getWaarde(), $enum->getWaarde())) {
            throw new \InvalidArgumentException('Opgegeven waarde niet in '.$enumerations.' lijst.');
        }

        $this->enumerations = $enum;
        $this->setEnumWaarde();
    }

    /**
     * @return null
     */
    public function getEnumWaarde(): string
    {
        return $this->enumWaarde;
    }

    /**
     * @param null $enumWaarde
     */
    public function setEnumWaarde()
    {
        $enumWaarde = $this->enumerations->getWaarde();
        $this->enumWaarde = $enumWaarde[$this->waarde];
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
        $this->pattern = $pattern;
    }
}
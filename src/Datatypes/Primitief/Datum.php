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
    public $beschrijving = 'Datum';
    /**
     * @var string
     */
    public $formaat = 'Y-m-d'; // 2016-02-18
    /**
     * @var null
     */
    private $waarde = null;

    /**
     * Datum constructor.
     * @param $waarde
     */
    public function __construct($waarde) {
        $this->setWaarde($waarde);
    }

    /**
     * @return string
     */
    public function getWaarde(): string {
        return $this->waarde;
    }

    /**
     * @param string $waarde
     */
    public function setWaarde(string $waarde)
    {
        if(\DateTime::createFromFormat($this->formaat, $waarde) === false) {
            throw new \InvalidArgumentException('Primitieve Datatype \'' . $this->beschrijving . '\' met een invalide formaat opgegeven.');
        }
        $errors = \DateTime::getLastErrors();
        if (!empty($errors['warning_count'])) {
            throw new \InvalidArgumentException('Primitieve Datatype \''. $this->beschrijving .'\' met een invalide tijd buiten bereik.');
        }
        $this->waarde = $waarde;
    }
}
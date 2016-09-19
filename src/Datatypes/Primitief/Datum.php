<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

class Datum
{
    use Meta;

    private $beschrijving = 'Datum';
    private $formaat = 'Y-m-d'; // 2016-02-18
    private $waarde = null;

    public function __construct($waarde) {
        $this->setWaarde($waarde);
    }

    public function getWaarde(): string
    {
        return $this->waarde;
    }

    public function setWaarde($waarde)
    {
        if(!is_string($waarde))
        {
            throw new \Exception('Invoer waarde \''. $this->beschrijving .'\' geen string.');
        }
        if(\DateTime::createFromFormat($this->formaat, $waarde) !== false)
        {
            $errors = \DateTime::getLastErrors();
            if (!empty($errors['warning_count'])) {
                throw new \Exception('Primitieve Datatype \''. $this->beschrijving .'\' met een invalide tijd buiten bereik.');
            }
            $this->waarde = $waarde;
        } else {
            throw new \Exception('Primitieve Datatype \''. $this->beschrijving .'\' met een invalide formaat opgegeven.');
        }
    }
}
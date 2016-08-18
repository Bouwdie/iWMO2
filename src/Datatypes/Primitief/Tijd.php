<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

class Tijd
{
    use Meta;

    private $beschrijving = 'Tijd';
    private $formaat = 'H:i:s'; // 14:23:26
    private $waarde = null;

    public function __construct($time) {
        if(\DateTime::createFromFormat($this->formaat, $time) !== false)
        {
            $errors = \DateTime::getLastErrors();
            if (!empty($errors['warning_count'])) {
                throw new \Exception('Primitieve Datatype \''. $this->beschrijving .'\' met een invalide datum buiten bereik.');
            }
            $this->waarde = $time;
        } else {
            throw new \Exception('Primitieve Datatype \''. $this->beschrijving .'\' met een invalide formaat opgegeven.');
        }
    }
}
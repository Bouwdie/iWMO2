<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

class Tekst
{
    use Meta;

    private $beschrijving = 'Tekst';
    private $maxLength = 255;
    private $waarde = null;

    public function __construct($string) {
        if(is_string($string)) {
            if(strlen($string) <= $this->maxLength)
            {
                $this->waarde = $string;
            } else {
                throw new \Exception('Opgegeven waarde is groter dan ' . $this->maxLength .' in primitief datatype ' .$this->beschrijving);
            }
        } else {
            throw new \Exception('Opgegeven waarde is geen primitief datatype ' .$this->beschrijving);
        }
    }

    public function setMaxLength($maxLength) {
        $this->maxLength = $maxLength;
    }
}
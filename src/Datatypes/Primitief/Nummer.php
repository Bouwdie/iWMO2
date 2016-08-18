<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;

use Hyperized\Iwmo2\Generiek\Meta;

class Nummer
{
    use Meta;

    private $beschrijving = 'Nummer';
    private $waarde = null;

    public function __construct($integer) {
        if(is_int($integer)) {
            $this->waarde = $integer;
        } else {
            throw new \Exception('Opgegeven waarde is geen primitief datatype ' .$this->beschrijving);
        }
    }
}
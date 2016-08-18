<?php

namespace Hyperized\Iwmo2;
namespace Hyperized\Iwmo2\Generiek;

trait Meta
{
    public function geefWmoCode()
    {
        $reflection = new \ReflectionClass($this);
        $trimmedClass =  ltrim($reflection->getShortName(), 'WMO');
        if(is_numeric($trimmedClass)) {
            return $trimmedClass;
        } else {
            return false;
        }
    }

    public function geefWmoCodeWeer()
    {
        echo $this->geefWmoCode()."\n";
    }

    public function geefBeschrijving()
    {
        return $this->beschrijving;
    }

    public function geefBeschrijvingWeer()
    {
        echo $this->beschrijving."\n";
    }

    public function geefTitel()
    {
        if(!isset($this->titel))
        {
            $reflection = new \ReflectionClass($this);
            $this->titel = $reflection->getShortName();
        }
        return $this->titel;
    }

    public function geefTitelWeer()
    {
        echo $this->geefTitel()."\n";
    }
}
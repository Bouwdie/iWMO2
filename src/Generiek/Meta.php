<?php

namespace Hyperized\Iwmo2\Generiek;

/**
 * Class Meta
 * @package Hyperized\Iwmo2\Generiek
 */
trait Meta
{
    /**
     * @return bool|string
     */
    public function getWmoCode()
    {
        $reflection = new \ReflectionClass($this);
        $trimmedClass = ltrim($reflection->getShortName(), 'WMO');
        if (is_numeric($trimmedClass)) {
            return $trimmedClass;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        if (!isset($this->titel)) {
            $reflection = new \ReflectionClass($this);
            $this->titel = $reflection->getShortName();
        }
        return $this->titel;
    }
}
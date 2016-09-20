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
    private $beschrijving = 'Nummer';
    /**
     * @var null
     */
    private $waarde = null;
    /**
     * @var int
     */
    private $maxWaarde = PHP_INT_MAX;
    /**
     * @var int
     */
    private $minWaarde = PHP_INT_MIN;

    /**
     * Nummer constructor.
     * @param int $waarde
     * @param int|null $maxWaarde
     * @param int|null $minWaarde
     */
    public function __construct(int $waarde,
                                int $maxWaarde = null,
                                int $minWaarde = null) {
        if(!is_null($maxWaarde)) {
            $this->setMaxWaarde($maxWaarde);
        }
        if(!is_null($minWaarde)) {
            $this->setMinWaarde($minWaarde);
        }
        $this->setWaarde($waarde);
    }

    /**
     * @return int
     */
    public function getMinWaarde(): int {
        return $this->minWaarde;
    }

    /**
     * @param int $minWaarde
     */
    public function setMinWaarde(int $minWaarde) {
        $this->minWaarde = $minWaarde;
    }

    /**
     * @return int
     */
    public function getMaxWaarde(): int {
        return $this->maxWaarde;
    }

    /**
     * @param int $maxWaarde
     */
    public function setMaxWaarde(int $maxWaarde) {
        $this->maxWaarde = $maxWaarde;
    }

    /**
     * @return int
     */
    public function getWaarde(): int {
        return $this->waarde;
    }

    /**
     * @param int $waarde
     */
    public function setWaarde(int $waarde) {
        if($waarde < $this->minWaarde) {
            throw new \InvalidArgumentException('Primitieve Datatype \''. $this->beschrijving .'\' heeft de minimale waarde (\''.$this->minWaarde.'\') niet bereikt.');
        }
        if($waarde > $this->maxWaarde) {
            throw new \InvalidArgumentException('Primitieve Datatype \''. $this->beschrijving .'\' heeft de maximale waarde (\''.$this->maxWaarde.'\') overschreden.');
        }
        $this->waarde = $waarde;
    }
}
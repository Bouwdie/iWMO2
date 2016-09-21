<?php
namespace Hyperized\Iwmo2\Datatypes\Logisch;

use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class AgbCode
 *    Identificerende code van een instelling.
 * @package Hyperized\Iwmo2\Datatypes\Logisch
 */
class AgbCode
{
    use Meta;

    /**
     * @var string
     */
    private $beschrijving = 'Identificerende code van een instelling.';

    /**
     * @var null
     */
    private $waarde = null;

    /**
     * AgbCode constructor.
     * @param string $waarde
     */
    public function __construct(string $waarde)
    {
        $this->setWaarde($waarde);
    }

    /**
     * @return Tekst|null
     */
    public function getWaarde(): Tekst
    {
        return $this->waarde;
    }

    /**
     * @param Tekst|null|string $waarde
     */
    public function setWaarde(string $waarde)
    {
        $this->waarde = new Tekst($waarde, null, 8, '[0-9]{8}');
    }
}
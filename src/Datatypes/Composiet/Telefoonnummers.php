<?php

namespace Hyperized\Iwmo2\Datatypes\Composiet;

use Hyperized\Iwmo2\Generiek\Meta;

/**
 * Class Telefoonnummers
 * @package Hyperized\Iwmo2\Datatypes\Composiet
 */
class Telefoonnummers
{
    use Meta;

    /**
     * @var string
     */
    protected static $beschrijving = 'De telefoonnummers waarop de cliënt of relatie van de cliënt te bereiken is.';
    /**
     * @var Telefoon|null
     * What is with these nummeric vars?
     */
    private $telefoon01 = null;
    /**
     * @var Telefoon|null
     * Optional
     */
    private $telefoon02 = null;

    /**
     * Telefoonnummers constructor.
     * @param Telefoon $telefoon01
     * @param Telefoon|null $telefoon02
     */
    public function __construct(
        Telefoon $telefoon01,
        Telefoon $telefoon02 = null
    ) {
        $this->telefoon01 = $telefoon01;
        if(!is_null($telefoon02)) {
            $this->telefoon02 = $telefoon02;
        }
    }
}
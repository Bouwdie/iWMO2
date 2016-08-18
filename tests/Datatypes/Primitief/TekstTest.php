<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class TekstTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Tekst('Hallo Wereld');
    }

    public function testTekstInstanceOf()
    {
        $this->assertInstanceOf(Tekst::class, $this->object);
    }
}


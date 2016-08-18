<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class NummerTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        date_default_timezone_set('Europe/Amsterdam');
        $this->object = new Nummer(42);
    }

    public function testNummerInstanceOf()
    {
        $this->assertInstanceOf(Nummer::class, $this->object);
    }
}

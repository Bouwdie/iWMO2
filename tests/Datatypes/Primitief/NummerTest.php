<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class NummerTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    public function testInstanceOf()
    {
        $this->object = new Nummer(42);
        $this->assertInstanceOf(Nummer::class, $this->object);
    }

    public function testCorrectRange() {
        $this->object = new Nummer(1);
    }

    public function testBelowRange() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Nummer(1, 2, 2);
    }

    public function testAboveRange() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Nummer(3, 2, 2);
    }

    public function testNonAcceptedInput() {
        $this->expectException(\TypeError::class);
        $this->object = new Nummer('hello');
    }

    public function testGetter() {
        $this->object = new Nummer(42);
        $this->assertSame($this->object->getWaarde(), 42);
    }
}

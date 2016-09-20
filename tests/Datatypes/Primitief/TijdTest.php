<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class TijdTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    public function testInstanceOf()
    {
        $this->object = new Tijd(date('H:i:s'));
        $this->assertInstanceOf(Tijd::class, $this->object);
    }

    public function testCorrectRange() {
        $this->object = new Tijd('12:34:56');
    }

    public function testIncorrectRange() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tijd('25:61:61');
    }

    public function testIncorrectFormat() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tijd('01-01-2012');
    }

    public function testIncorrectData() {
        $this->expectException(\TypeError::class);
        $this->object = new Tijd(['hello', 'world', 1337]);
    }

    public function testGetter() {
        $this->object = new Tijd(date('H:i:s'));
        $this->assertSame($this->object->getWaarde(), date('H:i:s'));
    }
}

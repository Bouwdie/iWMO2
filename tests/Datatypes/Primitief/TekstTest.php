<?php

namespace Hyperized\Iwmo2\Datatypes\Primitief;


class TekstTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    public function testTekstInstanceOf()
    {
        $this->object = new Tekst('Hallo Wereld');
        $this->assertInstanceOf(Tekst::class, $this->object);
    }

    // waarde
    public function testCorrectWaardeType() {
        $this->object = new Tekst('Hallo Wereld');
    }

    public function testIncorrectWaardeType() {
        $this->expectException(\TypeError::class);
        $this->object = new Tekst(['Hallo Wereld'], null, null, null, null);
    }

    // restrictions

    // enumerations
    public function testCorrectEnum() {
        $this->object = new Tekst('AB', null, 'NUM061', null, null);
    }

    public function testIncorrectEnumName() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('AB', null, 'NUM016', null, null);
    }

    public function testIncorrectEnumValue() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('ABC', null, 'NUM061', null, null);
    }

    // maxLength
    public function testCorrectMaxLength() {
        $this->object = new Tekst('Hallo Wereld', null, null, 12, null);
    }

    public function testIncorrectMaxLength() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('Hallo Wereld', null, null, 10, null);
    }

    // pattern

}


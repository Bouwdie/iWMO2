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

    // enumerations
    public function testCorrectEnum() {
        $this->object = new Tekst('AB', 'NUM061', null, null);
    }

    public function testIncorrectEnumName() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('AB', 'NUM016', null, null);
    }

    public function testIncorrectEnumValue() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('ABC', 'NUM061', null, null);
    }

    // maxLength
    public function testCorrectMaxLength() {
        $this->object = new Tekst('Hallo Wereld', null, 12, null);
    }

    public function testIncorrectMaxLength() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('Hallo Wereld', null, 10, null);
    }

    // pattern
    public function testCorrectPattern() {
        $this->object = new Tekst('12345678', null, 8, '[0-9]{8}');
    }

    public function testIncorrectPatternMatch() {
        $this->expectException(\InvalidArgumentException::class);
        $this->object = new Tekst('123456789', null, 9, '[0-9]{8}');
    }

}


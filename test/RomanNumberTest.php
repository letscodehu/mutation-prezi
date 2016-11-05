<?php


class RomanNumberTest extends PHPUnit_Framework_TestCase {

    private $romanNumber;

    public function setUp() {
        $this->romanNumber = new \Letscodehu\RomanNumber();
    }

    /**
    * @test
    */
    public function itReturns_I_for_1() {
        $this->romanNumber->convert(1);
    }

}
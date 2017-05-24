<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: Will
 * Date: 24/05/2017
 * Time: 12:10
 */
class CalculTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(10, Calcul::add(1, 9));
        $this->assertEquals(8, Calcul::add(-1, 9));
        $this->assertEquals(4, Calcul::add(1, 1, 2));
    }

    public function testMinus()
    {
        $this->assertEquals(10, Calcul::minus(15, 5));
        $this->assertEquals(-20, Calcul::minus(-15, 5));
    }

    public function testMultiply()
    {
        $this->assertEquals(12, Calcul::multiply(3, 4));
        $this->assertEquals(-12, Calcul::multiply(-3, 4));
    }

    public function testDivide()
    {
        $this->assertEquals(3, Calcul::divide(15, 5));
        $this->assertEquals(-3, Calcul::divide(15, -5));
    }
}

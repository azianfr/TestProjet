<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: Will
 * Date: 24/05/2017
 * Time: 12:29
 */
class TokenTest extends TestCase
{
    public function testMoreThan6()
    {
        $token = new Token(16);
        $this->assertGreaterThanOrEqual(6, strlen($token->getToken()));
        $token = new Token(2);
        $this->assertLessThan(6, strlen($token->getToken()));
    }

    public function testNotSpecialChar()
    {
        $token = new Token(16);
        $this->assertEquals(1, preg_match('/[a-zA-Z0-9]/', $token->getToken()));
    }
}

<?php
use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase{
    function testCalculateFinal(){
        $cart = new Cart();
        $final = $cart->calculateFinal(10);
        $this->assertEquals(12, $final);
    }
}
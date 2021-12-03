<?php
use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase{

    protected $cart;

    protected function setUp(): void 
    {
        $this->cart = new Cart();
    }

    function testCalculateFinal(){
        $cart = new Cart();
        $final = $cart->calculateFinal(10);
        $this->assertEquals(12, $final);
    }
}
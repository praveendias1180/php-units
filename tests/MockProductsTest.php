<?php

use PHPUnit\Framework\TestCase;

class MockProductsTest extends TestCase{
    /**
     * Let's write a test using AAA method.
     * 
     * (Or Given, When, Then method.)
     */
    public function testMockProductsAreReturned(){
        /**
         * 1. A - Arrange the Test.
         */
        $mockRepo = $this->createMock(\App\ProductRepository::class);

        $mockProductsArray = [
            ['id' => 1, 'name' => 'Name 1'],
            ['id' => 2, 'name' => 'Name 2'],
        ];

        $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);

        /**
         * 2. A - Act.
         */
        $products = $mockRepo->fetchProducts();

        // dd($products);

        /**
         * 3. A - Assert.
         */
        $this->assertSame($mockProductsArray[0]['name'], $products[0]['name']);

    }

}
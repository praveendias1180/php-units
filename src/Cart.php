<?php
namespace App;

class Cart {
    public float $value;
    public static float $tax = 1.2;

    /**
     * Calculate final value.
     */
    function calculateFinal($value){
        return $value * self::$tax;
    }
}
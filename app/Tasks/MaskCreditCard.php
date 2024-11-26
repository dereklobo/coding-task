<?php

namespace App\Tasks;

use InvalidArgumentException;

use function PHPUnit\Framework\throwException;

class MaskCreditCard
{
    /**
     * Return first 12 digits masked with asterisk(*)
     * with last 4 digits unmasked
     * 
     * @param [string] $cardNumber
     * @return string
     */
    public function maskCreditCard($cardNumber)
    {
        // dump('number is: '.$cardNumber);
        if(strlen($cardNumber) !== 16 || !is_numeric($cardNumber) || (int)$cardNumber < 0)
        {
            throw new InvalidArgumentException("Invalid credit card number. Length should be 16 digits");
        }

        return str_repeat('*', 12) . substr($cardNumber, -4);
    }
}
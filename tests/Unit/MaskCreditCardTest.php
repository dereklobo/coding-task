<?php

namespace Tests\Unit;

use App\Tasks\MaskCreditCard;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MaskCreditCardTest extends TestCase
{

    /**
     * Hide the first 12 numbers of a valid credit card number
     *
     * @return void
     */
    public function testMaskCreditCardIsValid()
    {
        // case 1: 16 digit string
        $creditCardNumber = '8765432112345678';
        $expectedResult   = '************5678';

        $creditCard = new MaskCreditCard();
        $result = $creditCard->maskCreditCard($creditCardNumber);
        $this->assertEquals($result, $expectedResult);

        // case 2: 16 digit number
        $creditCardNumber = 8765432112345678;
        $expectedResult   = '************5678';

        // $creditCard = new MaskCreditCard();
        $result = $creditCard->maskCreditCard($creditCardNumber);
        $this->assertEquals($result, $expectedResult);

    }

    /**
     * case 1: string is empty
     * Throw exception when the card number is invalid
     * @expectedException InvalidArgumentException
     */
    public function testMaskCreditCardIsInValidEmpty()
    {
        $creditCard = new MaskCreditCard();

        $creditCardNumber = ''; 
        // here add expection first and then test function that generates the exception
        $this->expectException(InvalidArgumentException::class);
        $creditCard->maskCreditCard($creditCardNumber);
    }

    /**
     * case 2: alphanumeric characters in string
     * Throw exception when the card number is invalid
     * @expectedException InvalidArgumentException
     */
    public function testMaskCreditCardIsInValidAlphaNumeric()
    {
         
        $creditCard = new MaskCreditCard();
        $creditCardNumber = 'ab8765432112345!';
        $this->expectException(InvalidArgumentException::class);
        $creditCard->maskCreditCard($creditCardNumber);
 
    }
    /**
     * case 3: less than 16 digits
     * Throw exception when the card number is invalid
     * @expectedException InvalidArgumentException
     */
    public function testMaskCreditCardIsInValidLessThan16Digits()
    {
         
        $creditCard = new MaskCreditCard();
        
        $creditCardNumber = '87654321123456'; 
        $this->expectException(InvalidArgumentException::class);
        $creditCard->maskCreditCard($creditCardNumber);
  
         
    }
    /**
     * case 4: adding 16 digit negative numeric
     * Throw exception when the card number is invalid
     * @expectedException InvalidArgumentException
     */
    public function testMaskCreditCardIsInValidNegativeNumber()
    {
        $creditCard = new MaskCreditCard();
          
        $creditCardNumber = '-876543211234567'; 
        $this->expectException(InvalidArgumentException::class);
        $creditCard->maskCreditCard($creditCardNumber);
    }
}
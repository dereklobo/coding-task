<?php

namespace Tests\Unit;

use App\Tasks\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{

    
   
    /**
     *  Assert arranged array with sum values of the target found
     *
     * @return void
     */
    public function testTwoSumTwoSumFound(): void
    {
        $arrayValues = [2, 11, 7, 15];
        $target = 18;
        $expectedArrayValues = [7, 11, 2, 15];

        $twoSum = new TwoSum();
        $result = $twoSum->findAndMoveSumOfTargetValues($arrayValues, $target);
        $this->assertEquals($result, $expectedArrayValues);
    }

    /**
     *  Assert arranged array with sum values of the target found
     *
     * @return void
     */
    public function testTwoSumTwoSumFound2(): void
    {
        $arrayValues = [3, 5, 2, -4, 8, 11];
        $target = 7;
        $expectedArrayValues = [-4, 11, 2, 5, 3, 8] ;

        $twoSum = new TwoSum();
        $result = $twoSum->findAndMoveSumOfTargetValues($arrayValues, $target);
        $this->assertEquals($result, $expectedArrayValues);
    }

    /**
     * Assert original array when no sum valued of the target present
     *
     * @return void
     */
    public function testTwoSumTwoNoSumFound(): void{
        $arrayValues = [2, 10, 7, 15];
        $target = 18;
        $expectedArrayValues = [2, 10, 7, 15];

        $twoSum = new TwoSum();
        $result = $twoSum->findAndMoveSumOfTargetValues($arrayValues, $target);
        $this->assertEquals($result, $expectedArrayValues);
    }
}

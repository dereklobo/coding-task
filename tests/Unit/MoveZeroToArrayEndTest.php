<?php

namespace Tests\Unit;

use App\Tasks\MoveZero;
use PHPUnit\Framework\TestCase;

class MoveZeroToArrayEndTest extends TestCase
{
    /**
     * Identify the number of zeros in array and append to end of array
     *
     * @return void
     */
    public function testMoveZeroToEnd()
    {
        $arrayValues = [0, 1, 0, 3, 12];
        $expectedResult = [1, 3, 12, 0, 0];

        $moveZero = new MoveZero();
        $result = $moveZero->moveZeroToEnd($arrayValues);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * Array does not contain zero elements, returns array
     *
     * @return void
     */
    public function testMoveZeroToEndWithNoZeroValues()
    {
        $arrayValues = [2, 1, 5, 3, 12];
        $expectedResult = [2, 1, 5, 3, 12];

        $moveZero = new MoveZero();
        $result = $moveZero->moveZeroToEnd($arrayValues);
        $this->assertEquals($expectedResult, $result);
    }
}
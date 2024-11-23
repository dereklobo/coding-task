<?php

namespace App\Tasks;

class MoveZero
{
    /**
     * Move zeros to end of array while maintaining the order of non-zero elements in an array.
     *
     * @param [array] $array
     * @return array
     */
    public function moveZeroToEnd($array)
    {
        // filter out zero values from array to get non-zero elements(order maintained)
        $nonZeroArray = array_filter($array, function($value) { 
                                            return $value !== 0;
                                        });

        // get number of zeros
        $numberOfZeros = count($array) - count($nonZeroArray);

        // fill value 0 to array based on number of zeros counted in array
        $addZeroToEnd = array_fill(0, $numberOfZeros, 0);

        // merge the nonzero array and zero array with zero array as the second parameter
        $appendZero = array_merge($nonZeroArray, $addZeroToEnd);

        return $appendZero;
    }

}
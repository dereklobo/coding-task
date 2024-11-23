<?php

namespace App\Tasks;

class TwoSum
{
    // store the value of the array as keys and index as values in hashMap array
    public function findAndMoveSumOfTargetValues($array, $target){
        $hashMap = [];
        foreach ($array as $index => $value){
            // find complement of target value and check if its present in the hashMap array
            $complement = $target - $value;

            // check if complement is in array (set as hashmap key)
            if(isset($hashMap[$complement])){
                
                // dump('found  $hashMap[$complement] index: with complement :'.$complement.' and hashmapvalue:'.$hashMap[$complement]);
                $first = $array[$hashMap[$complement]]; // index of found
                $second = $array[$index];

                // unset the first and second array positions
                unset($array[$hashMap[$complement]]);
                unset($array[$index]);

                // move array positions by merging the remaining array positions with reassigned index
                $array = array_merge([$first, $second], $array);
            }
            // add value as key and index as value to the hashmap array
            $hashMap[$value] = $index;
            // dump('hashmap for index: '.$value.' and value:'.$index);
        }
        // dump('hashmap index for 2. :'.$hashMap[2]);
        // dump('hashmap index for 11 . :'.$hashMap[11]);
        // dump('hashmap index for 7. :'.$hashMap[7]);
        // dump('hashmap index for 15. :'.$hashMap[15]);
        return $array;
    }
}
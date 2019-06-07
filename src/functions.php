<?php

namespace CrackingCode;

function addOneToLastArrayMember($array)
{
    if (count($array) === 0) {
        return false;
    }

    $carry = 1;

    $totalMembers = count($array) - 1;
    $returnArray = $array;
    for ($i = $totalMembers; $i >= 0; $i--) {
        $returnArray[$i] = $returnArray[$i] + $carry;
        if ($returnArray[$i] < 10) {
            break;
        } else {
            $returnArray[$i] = 0;
        }
    } 
    
    if ($returnArray[0] === 0) {
        array_unshift($returnArray, 1);
    }

    return $returnArray;
}

function swapLetters($word)
{
    $length = strlen($word);
    
    if (!$length) return false;
    if ($length === 1) return $word;

    $midpoint = $length/2;

    for ($i = 0; $i < $midpoint; $i++) {
       
        $store = $word[$i];
        $word[$i] = $word[$length - 1 - $i];
        $word[$length - 1 - $i] = $store;
    }

    return $word;

}
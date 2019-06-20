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

function mostFrequentElementInArray(Array $array)
{
    if (count($array) <= 1) return false;

    $counts = [];

    foreach ($array as $value) {
        if (array_key_exists($value, $counts)) {
            $counts[$value] = $counts[$value] + 1;
        } else {
            $counts[$value] = 0;
        }
    }

    $max = 0;
    $mostFrequent = [];

    foreach ($counts as $key => $value) {
        if ($value > $max) {
            $mostFrequent = [];
            $mostFrequent[] = $key;
            $max = $value;
            continue;
        }

        if ($value === $max && $max !== 0) {
            $mostFrequent[] = $key;
        }
    }

    if (empty($mostFrequent)) return false;

    if (count($mostFrequent) === 1) return $mostFrequent[0];

    return $mostFrequent;
}

function getMax($array) {
    
    if(empty($array)) return false;
    $index = 0;
    foreach($array as $key => $value) {
        if($array[$index] < $value) {
            $index = $key;
        }
    }

    return $array[$index];
}

function numbersAddToEight(Array $array) {
    
    $sum = 8;
    $lookup = [];

    foreach ($array as $number) {
        $compliment = $sum - $number;
        if (array_key_exists($compliment, $lookup)) {
            return true;
        } else {
            $lookup[$number] = true;
        }
    }
    return false;
}

/**
 * return count of pairs that have difference of 2.
 * [1, 7, 5, 9, 2, 12, 3] => (1,3) (3,5) (5,7) (7,9)
 */

function differenceIsTwo(array $array)
{
    $hashTable = [];
    $count = 0;

    foreach ($array as $key) {
        $hashTable[$key] = true;
    }

    foreach ($array as $number) {
        $complimentOne = $number + 2;
        $complimentTwo = $number - 2;

        if (array_key_exists($complimentOne, $hashTable)) {
            $count ++;
        }

        if (array_key_exists($complimentTwo, $hashTable)) {
            $count ++;
        }
    }

    return $count / 2;
}

   
function shrinkWord(string $word)
{
    $length = strlen($word);
    if (!$length) return false;

    $counter = 0;
    $char = $word[0];
    $shrinked = '';


    for ($i = 1; $i < $length; $i++) {
        if ($word[$i]  == $char) {
            $counter++;
        } else {
            $shrinked .= $char;
            if ($counter > 0) {
                $shrinked .= (string) $counter + 1;
            }
            $counter = 0;
            $char = $word[$i];
        }

        if ($i === $length - 1) {
            $shrinked .= $char;
            if ($counter > 0) {
                $shrinked .= (string) $counter + 1;
            }
        }

    }

    return $shrinked;
}

function rotateMatrix90CW($matrix, $n)
{
    $matrix90 = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $array[$j] = $matrix[$n - 1 - $j][$i];
        }

        $matrix90[] = $array;
    }

   
    return $matrix90;
}

function displayComment(Array $comments, int $n) {
    if (isset($comments[$n])) {
        $str = "<ul>";
        foreach ($comments[$n] as $comment) {
            $str .= "<li><div class='comment'><span class='pic'>{$comment->username}</span>";
            $str .= "<span class='datetime'>{$comment->createdAt}</span>";
            $str .= "<span class='commenttext'>" . $comment->comment . "</span></div>";
            $str .= displayComment($comments, $comment->id);
            $str .= "</li>";
        }
        $str .= "</ul>";
        return $str;
    }
    return "";
}

/**
 * Calculates how many permutations of a certain string has a line of characters
 * abbc  cbabadcbbabbcbabaabccbabc has 7 permutations.  
 */

function numberOfStringPermutations($shorterString, $longerString) 
{
    $positions = [];
    $window = strlen($shorterString);
    
    $stringArray = str_split($longerString);
    for ($i = 0; $i < strlen($longerString); $i++) {
        $testString = $shorterString;
        for ($j = 0; $j < $window; $j++) {
            
            if(!array_key_exists($i + $j, $stringArray)) {
                break;
            }
            $testString = preg_replace('/'. $stringArray[$i+$j] . '/', '', $testString, 1);
            
        }

        if (strlen($testString) === 0) {
            $positions[] = $i;
        } 
    }

    return count($positions);
}
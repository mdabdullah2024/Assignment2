<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    //Vowel Count
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);

    // Reverse the string
    $revStr = strrev($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $revStr\n";
}










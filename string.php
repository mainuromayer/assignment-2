<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowelCounts = [];
$reverseString = [];

foreach ( $strings as $word ) {
    $vowelCount = preg_match_all( '/[aeiouAEIOU]/', $word );
    $vowelCounts[$word] = $vowelCount;
}

foreach($strings as $word) {
    $reverseWord = strrev($word);
    $reverseString[$word] = $reverseWord;
}

echo "Original String: " . $strings[0] . ", Vowel Count: " . $vowelCounts[$strings[0]] . ", Reversed String: " . $reverseString[$strings[0]] . PHP_EOL;
echo "Original String: " . $strings[1] . ", Vowel Count: " . $vowelCounts[$strings[1]] . ", Reversed String: " . $reverseString[$strings[1]] . PHP_EOL;
echo "Original String: " . $strings[2] . ", Vowel Count: " . $vowelCounts[$strings[2]] . ", Reversed String: " . $reverseString[$strings[2]] . PHP_EOL;
echo "Original String: " . $strings[3] . ", Vowel Count: " . $vowelCounts[$strings[3]] . ", Reversed String: " . $reverseString[$strings[3]] . PHP_EOL;
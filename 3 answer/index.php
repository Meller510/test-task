<?php
function isPalindrome($string): bool
{
    $cleanedString = strtolower(str_replace(' ', '', $string));
    return $cleanedString === strrev($cleanedString);
}

function checkForPalindrome($str) : string
{
    if (isPalindrome($str)) {
        return "'$str' is palindrome.\n";
    } else {
        return  "'$str' is not a palindrome.\n";
    }
}

$testString1 = "A nut for a jar of tuna";
$testString2 = "Hello";

echo checkForPalindrome($testString1);
echo checkForPalindrome($testString2);


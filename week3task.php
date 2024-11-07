<?php

// Section 1: Print numbers from 1 to a predefined number N
$N = 10; // Predefined number
echo "<h3>Numbers from 1 to $N:</h3>";
for ($i = 1; $i <= $N; $i++) {
    echo $i . "<br>";
}

echo "<hr>"; // Separator for clarity

// Section 2: Print even numbers from 1 to N, or -1 if none found
$N = 10; // Set the desired number here
$foundEven = false;
echo "<h3>Even numbers from 1 to $N:</h3>";
for ($i = 2; $i <= $N; $i += 2) {
    echo $i . "<br>";
    $foundEven = true;
}
if (!$foundEven) {
    echo "-1<br>";
}

echo "<hr>"; // Separator for clarity

// Section 3: Find the maximum number in a list
$M = 5; // Number of elements
$numbers = [1, 8, 5, 7, 5]; // List of numbers
echo "<h3>Finding the maximum number in the list:</h3>";
$maxNumber = max($numbers);
echo "The maximum number is: " . $maxNumber . "<br>";

echo "<hr>"; // Separator for clarity

// Section 4: Check if 15 and 7 are prime numbers
function isPrime($X) {
    if ($X <= 1) return false;
    if ($X <= 3) return true;
    if ($X % 2 == 0 || $X % 3 == 0) return false;
    for ($i = 5; $i * $i <= $X; $i += 6) {
        if ($X % $i == 0 || $X % ($i + 2) == 0) return false;
    }
    return true;
}

$numbersToCheck = [15, 7]; // Numbers to check for primality
foreach ($numbersToCheck as $X) {
    echo "<h3>Check if $X is a prime number:</h3>";
    echo isPrime($X) ? "YES<br>" : "NO<br>";
}

echo "<hr>"; // Separator for clarity

// Section 5: Check if numbers from 1 to 10 are palindromes
function isPalindrome($str) {
    return $str === strrev($str);
}
echo "<h3>Checking if numbers from 1 to 10 are palindromes:</h3>";
for ($N = 1; $N <= 10; $N++) {
    $N_str = strval($N);
    $reversedN = ltrim(strrev($N_str), '0');
    echo "Original Number: $N_str<br>";
    echo "Reversed Number: $reversedN<br>";
    echo "Palindrome: " . (isPalindrome($N_str) ? "YES" : "NO") . "<br><br>";
}

echo "<hr>"; // Separator for clarity

// Section 6: Find all divisors of N
$N = 10; // Number to find divisors of
echo "<h3>All divisors of $N:</h3>";
function findDivisors($number) {
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
$divisors = findDivisors($N);
foreach ($divisors as $divisor) {
    echo $divisor . "<br>";
}

echo "<hr>"; // Separator for clarity

// Section 7: Print lucky numbers between A and B
function isLucky($num) {
    $numStr = strval($num);
    for ($i = 0; $i < strlen($numStr); $i++) {
        if ($numStr[$i] !== '4' && $numStr[$i] !== '7') {
            return false;
        }
    }
    return true;
}
$A = 1;
$B = 100;
echo "<h3>Lucky numbers between $A and $B:</h3>";
$luckyNumbers = [];
for ($i = $A; $i <= $B; $i++) {
    if (isLucky($i)) {
        $luckyNumbers[] = $i;
    }
}
echo count($luckyNumbers) > 0 ? implode(" ", $luckyNumbers) . "<br>" : "-1<br>";

echo "<hr>"; // Separator for clarity

// Section 8: Print left-angled triangle with N rows
$N = 5; // Number of rows for the triangle
echo "<h3>Left-angled triangle with $N rows:</h3>";
for ($i = 1; $i <= $N; $i++) {
    echo str_repeat("*", $i) . "<br>";
}

?>
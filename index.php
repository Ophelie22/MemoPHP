<?php

LES BASES

1* Pour me connecter a mon serveur local je vais faire :
php -S localhost:8000

2*Pour les commentaires:
// one line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

3* Pour les conventions de syntaxes:
PHP opening/closing tag
  echo "Hello World";

// if no closing tag the rest of the file will be considered PHP

// Short syntax for PHP echo
<?= "Hello World" ?>

//Enable strict typing (first line of your PHP file)
<? declare(strict_types=1);

// Include a PHP file
require 'app/Product.php'

// Create a namespace
namespace App;

// Use a namespace
use App\Product;

$firstName = 'Mike'  // camelCase
function updateProduct() // camelCase
class ProductItem // StudlyCaps
const ACCESS_KEY = '123abc'; // all upper case with underscore separators

4* Pour les vérifications 

echo 'Hello World';

// Debug output
var_dump($names);
print_r($products);

// Input from console
$name = readline('What is your name : ');

4* Pour les déclarations variables.

$name = 'Mike'; //string
$isActive = true; //boolean
$number = 25; //integer
$amount = 99.95; //float
$fruits = ['orange', 'apple', 'banana'] //array
const MAX_USERS = 50; //constant
define('MAX_USERS', 50); //constant

// Assign 'by reference' with the & keyword
$name_2 = &$name_1

// Type conversion
$age = (int)readline('Your age: ');
echo 'Your age is' . (string)$age;

echo gettype($age); // int

echo is_int($age) // true
echo is_float(12.5) // true
echo is_string($name) // true


5* Pour les phrases

// String can use single quote
$name = 'Mike'
// or double quote
$name = "Mike"

// Double quote string can escape characters \n = new line  \t = tab  \\ = backslash
echo "Hello Mike\nHello David";

// Double quote string can do interpolation
echo "Hello $name";

// string concat
echo 'Hello ' . $name;

// string length
echo strlen($name);

// Remove space(s) before and after
echo trim($text)

// Convert to lowercase / uppercase
echo strtolower($email);
echo strtoupper($name);

// Converts the first character to uppercase
echo ucfirst($name);  // 'Mike' 

// Replace text a by text b in $text
echo str_replace('a', 'b', $text);

// String Contains (PHP 8)
echo str_contains($name, 'ke')  # true

// Find numeric position of first occurrence 
$pos = strpos($name, 'k'); # 2

// Returns portion of string (offset / length)
echo substr($name, 0, $pos); # Mi 



5* Pour les nombres

// Shortcut addition assignment
$value = 10
$value++ // 11
// or
$value += 1 // 11

// Shortcut subtraction assignment
$value = 10
$value-- // 9
// or
$value -= 1 // 9

// Check if numeric
echo is_numeric('59.99'); # true

// Round a number
echo round(0.80);  // returns 1

// Round a number with precision
echo round(1.49356, 2));  // returns 1.49

// Random number 
echo(rand(10, 100)); # 89





6* Pour les conditions
// If / elseif / else
if ($condition == 10) {
    echo 'condition 10'
} elseif  ($condition == 5) {
    echo 'condition 5'
} else {
    echo 'all other conditions'
}

// And condition = &&
if ($condition === 10 && $condition2 === 5) {
    echo '10 and 5'
}

// Or condition = ||
if ($condition === 10 || $condition2 === 5) {
    echo '10 or 5'
}

// One line 
if ($isActive) return true;

// Null check
if (is_null($name)) {
    do something...
}

//Comparaison operation
== // equal no type check
=== // equal with type check
!= //not equal
|| //or
&& //and
> //greater than
< //less than

// Ternary operator (true : false)
echo $isValid ? 'user valid' : 'user not valid';

//Null Coalesce Operator
echo $name ?? 'Mike';  //output 'Mike' if $name is null

//Null Coalesce Assignment
$name ??= 'Mike';

// Null Safe Operator (PHP 8) will return null if one ? is null
echo $user?->profile?->activate();

// Null Safe + Null Coalesce (if null will return 'No user profile')
echo $user?->profile?->activate() ?? 'Not applicable';

//Spaceship operator return -1 0 1
$names = ['Mike', 'Paul', 'John']
usort($names, function($a, $b) {
    return $a <=> $b;
}
// ['John', 'Mike', 'Paul']

// Return false when convert as boolean
false, 0, 0.0, null, unset, '0', '', []

// Compare same variable with multiple values
switch ($color) {
    case 'red':
        echo 'The color is red';
         break;
    case 'yellow':
        echo 'The color is yellow';
        break;
    case 'blue':
        echo 'The color is blue';
        break;
    default:
        echo 'The color is unknown';
}

// Match Expression (PHP 8)
$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};

// Check if variable declare
isset($color['red']);  # true
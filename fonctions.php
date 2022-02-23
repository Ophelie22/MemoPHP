<?php
//function declararion
function name($firstName, $lastName = 'defaultvalue') {
    return "$firstName $lastName"
}

//function call
name('Mike', 'Taylor');

//function call with named parameters (PHP 8)
name(firstName: 'Mike', lastName: 'Taylor'); // order can change

//function variables params
function name(...$params) {
    return $params[0] . “ “ . params[1];
}

// Closure function
Route::get('/', function () {
     return view('welcome');
});

// Arrow functions
Route::get('/', fn () => view('welcome');


// Typed parameter and typed return
function display(string $first, string $last) : string {
    return "$first $last";
}

// Typed or null
function display(?string $name) {
    ...
}

// Union type (or)
function display(string|int $data) {
    ...
}

// Intersection type (and)
function count_and_interate(Iterator&Countable $value) {
    ...
}

// Return any type (mixed)
function logInfo(string $info) : mixed {
    ...
}

// No return (void)
function logInfo(string $info) : void {
    ...
}
<?php

// variable scope

//local scope
function myFunc()
{
    $price = 10;
    echo $price;
}

// global
$name = 'John';

// function myName()
// {
//     global $name;
//     echo "My name is $name";
// }

// function myName($name){
// $name is local to this function
//     $name = 'wario';
//     echo "My name is $name";
// }

//& acts like global to update $name 
function myName(&$name){
// $name is local to this function
    $name = 'wario';
    echo "My name is $name";
}
myName($name);

// Name is wario not John
echo $name;

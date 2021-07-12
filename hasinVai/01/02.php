<?php
$name = 'Rifat ';
echo $name;
echo "\n"; //make another line 
$name = 'Soft Asia';
echo $name;
echo "\n"; //make another
echo "My company name is {$name}";

// const
define('PI', 3.1416);
echo "\n"; //make another line 
echo PI; 
echo "\n"; //make another line 
// echo "Value of PI = {PI}".PI; // const k amra string er moddhe rakhte parbo  na

// echo constant('PI'); 
$constant = 'constant';
echo "Value of PI = {$constant(PI)}";
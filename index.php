<?php
/* 
    !Arrays Basics!
    Move comment arrows
    to isolate and 
    manipulate code blocks.
*/


//Basic Array
$learn = array('Conditionals', 'Arrays', 'Loops', 'HTML', 'CSS'); //Basic Array

/*<------
------>*/

//Array var_dump
var_dump($learn); //Var dump array
// array(3) { <<< 3 elements within the array
// [0]=> string(12) "Conditionals" 
// [1]=> string(6) "Arrays" 
// [2]=> string(5) "Loops" }
echo $learn[0]; //Echo by key

echo implode("<br />\n", $learn);//Implode array with line break

$learn [] = "Build something awesome";//Add value to the end of the array

var_dump($learn);

$learn = "Build something awesome";//Overwrite array with string variable 
var_dump($learn);

array_push($learn, 'Functions', 'Forms', 'Objects');//Add values to the end of the array
array_unshift($learn, 'HTML', 'CSS');//Add elements to the beginning of array
echo implode(" ", $learn);

echo 'you removed array' . array_shift($learn); //Remove first array element echo element
echo 'you removed array' . array_pop($learn); //Remove last array eleemnt echo element
unset($learn[1], $learn[2]); //Remove array element by key
//unset($learn); //Destroy the array
$learn = array_values($learn); //Re-index array values
$learn[0] = 'Email'; //Update the first element in the array by key

?>
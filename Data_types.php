<?php
$name = " Anvesh Mangalam";
$income = 30000000;

/*php Datatypes are 
1. integer 
2. float
3. String
4. boolean
5. Object
6. Array
7. NULL
*/

//String - Sequence of Characters 

$name = "Anvesh Mangalam" ;
$friend = "Shailendra Singh Kanshana";
$friend1 = "Ritesh Kumar Singh";
echo "$name friend is $friend and $friend1 ";


//Integer - Non Decimal Number
$income = 4555;
$debt = -6555;
echo "<br>";
echo $income;
echo "<br>";
echo $debt;
echo "<br>";


//float - Decimal point number
$income = 45.55;
$debt = -6.995;
echo $income;
echo "<br>";
echo $debt;
echo "<br>";

//Boolean - Can be either True or FALSE
$Red = true;
$is_Red = False;
echo var_dump($Red);
echo "<br>";
echo var_dump($is_Red);


//object - Instances of classes
//Employee is a class -----> harry can be one object

//var_dump in PHP has a function that also checks the datatype.

$friends = array("Shailendra","Ritesh","Devesh","Anvesh","Sachin");
echo var_dump($friends);

//NULL
$names = NULL;
echo var_dump($names);
?>

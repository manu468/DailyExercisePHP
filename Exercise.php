<?php 
// store each exercise in a string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

// create a variable containing the day of the week
$day = date('N');
//$day = 2;
//echo $day;
if ($day == 1)
{
echo "Your task on Monday is to  $exercise1" ;
}
elseif ($day == 2)
{
echo "Your task on Tuesday is to  $exercise2" ;
}
elseif ($day == 3)
{
echo "Your task on Wednesday is to  $exercise3" ;
}
elseif ($day == 4)
{
echo "Your task on Thursday is to  $exercise4" ;
}
elseif ($day == 5)
{
echo "Your task on Friday is to  $exercise5" ;
}
elseif ($day == 6)
{
echo "Your task on Saturday is to  $exercise6" ;
}
elseif ($day == 7)
{
echo "Your task on Sunday is to  $exercise7" ;
}


//echo "Hello Manoj";
// use an if statement to test for the day of the week
// display the corresponding exercise string


?>

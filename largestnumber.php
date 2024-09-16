<?php
//Largest Number  and second largest number 
$test = ['20','30','60','90','100'];
$larage = $test[0];

for ($i=1; $i <count($test); $i++)
{
if ($test[$i] > $larage)
{
$larage = $test[$i];// Largest Number 
// $larage = $test[$i-1];//second largest number
}
}

echo $larage;
echo "<br>";
//-------------------------------------
//Smallest number and second smallest 
$test = ['20','25','30','60','90','100'];
$larage = $test[0]; // Smallest number 
// $larage = $test[1]; //  second smallest 

for ($i=1; $i <count($test); $i++)
{
if ($test[$i] < $larage)
{
$larage = $test[$i];
}
}

echo $larage ;
?>
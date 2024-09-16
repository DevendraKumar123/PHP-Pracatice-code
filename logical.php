<?php
#factorial
// function factorial($n){
//     if($n==0){
//         return 1;
//     }
//     else{
//         return ($n * factorial($n-1));
//     }
    
// }
// echo factorial(5);

//Largest Number  and second largest number 
// $test = ['20','30','60','90','100'];
// $larage = $test[0];

// for ($i=1; $i <count($test); $i++)
// {
// if ($test[$i] > $larage)
// {
// $larage = $test[$i];
// }
// }

// echo $larage;
//-------------------------------------
//Smallest number and second smallest 
// $test = ['20','25','30','60','90','100'];
// $larage = $test[0];

// for ($i=1; $i <count($test); $i++)
// {
// if ($test[$i] < $larage)
// {
// $larage = $test[$i];
// }
// }

// echo $larage;


function isPrime($number) {
    // 1 is not a prime number
    if ($number <= 1) {
        return false;
    }

    // 2 and 3 are prime numbers
    if ($number <= 3) {
        return true;
    }

    // Eliminate even numbers and multiples of 3
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    // Check for other divisors
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }

    return true;
}

// Example usage
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>



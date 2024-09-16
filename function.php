<?php
echo "Function<br>";
// echo "<hr>";
// function demo(){
//     echo "<h1>Hello </h1>";
    
// }
// function hello(){
//     demo();
//     echo "this function only demo";
//     echo "<br>";
//     echo "<hr>";
// }
// hello();
// hello();
// demo();
// hello();

// function sum()  {
//     echo 10+20;
    
// }
// sum();

// function userdata($name,$color) {
//     echo "<h1 style='color:$color'>$name</h1>";

    
// }
// userdata("anil","green");
// userdata("Dev","red");
// userdata("aditya","yellow");


// function sum($a,$b)  {
//     echo $a+$b;
//     echo "<br>";
//     echo $a-$b;
// }
// sum(10,20);

// function return1(){
//     return "Devendra Kumar";
    
// }
// echo " My name is " .return1(). " Hai";

// function test(){
//     echo "This is variable function";
//     echo "<br>";
// }
// $test="test";
// // $val();
// function apple() {
//     echo "this is apple function called";
// }
// $apple="apple";
// function main($a) {
//     $a();
    
// }
// main($test);
// main($apple);

# Percentage

// function sum($math,$eng,$sc) {
//     $s=$math+$eng+$sc;
//     return $s;    
// }
// function percentage($st) {
//     $per=$st/3;
//     echo $per."%";
// }
// $total=sum(55,65,88);
// percentage($total);
// echo "<br>", $total;


# passing with reference
// function wow($a){
//     $a="Hey";
// }
// $str="Hello";
// wow($str);
// echo $str;

// function wow(&$a) {
//     $a.="hey2";
    
// }
// $str="Hello2";
// wow($str);
// echo $str;

#####
// function first($num){
//     $num +=5;
    
// }
// function second(&$num){
//     $num+=7;
    
// }
// $number=10;
// first($number);
// echo "Original value is $number <br>";

// second($number);
// echo "Original value is $number <br>";

# variable function
// function wow($name) {
//     echo "Hello $name";
    
// }
// $func = "wow";
// $func("Yahoo Baba");
# Anonymous Function
// $sayHello = function($name) {
//     echo "Hello $name";
    
// };
// $sayHello("Yahoo Baba this is Anonymous Function");

#recursive Funtion 
// function display($number){
//     if($number<=5){
//         echo "$number <br>";
//         display($number + 1);
//     }   
// }
// display(1);


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

#Local and global variable
// $x=10;
// function test(){
//     global $x;
//     echo " Variable inside function : $x<br>";
// }
// test();
// echo " Variable outside function : $x<br>";

?>
<?php
// $colors =[
//     "red"=>25,
//     "green"=>22,
//     "yellow"=>35
// ];
// echo "<ul>";
// foreach($colors as $key => $value){
//     echo "<li>$key = $value </li>";
// }
// echo "</ol>";

# foreach with list
// $emp=[
//     [1,"krishna","manager",5000],
//     [2,"salmam","salasman",8000],
//     [3,"mohan","opt",10000],
//     [4,"amir","driver",9000],
// ];
// echo "<table border='1px' cellpadding='5px' cellspecing='0px'>";
// foreach ($emp as list($id,$name,$post,$salary)){
//     echo "<tr><td>$id </td> <td>$name </td> <td>$post </td><td>$salary </td><tr>";
// }

// echo "<table>";


$arr=array("a"=>"52",55,36,"d"=>"89",24,66);
foreach($arr as $key => $value){
    echo $key."=".$value;
    echo "<br>";
}
?>
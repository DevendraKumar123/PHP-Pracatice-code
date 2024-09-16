<?php
#Array
// $colors = array('red',5,2.22,'yellow','blue','green');

// echo $colors[0]."<br>";
// echo $colors[2]."<br>";
// echo $colors[3]."<br>";

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// for($i=0;$i<4;$i++){
//     echo $colors[$i]."<br>";
// }

#associative array

// $age = array(
//     "bill"=> 25,
//     'steve'=> 55,
//     'dev'=> 85,
//     'anju'=> 26
// );

// echo $age["bill"]."<br>";
// echo $age["anju"]."<br>";
// echo $age["dev"]."<br>";

// $age['dev']=25;
// echo "<pre>";
// var_dump ($age);
// echo "</pre>";

// echo "<pre>";
// print_r ($age);
// echo "</pre>";


# sizeof() & countof()
// $colors = array('red',5,2,'yellow','blue','green');
// echo "count ".count($colors)."<br>";
// echo "sizeof ".sizeof($colors)."<br>";
// echo "<hr>";
// $len = count($colors);
// for($i=0;$i<$len;$i++){
//     echo $colors[$i]."<br>";
// }
// echo "<hr>";
//  foreach($colors as $value){
//     echo $value . "<br>"; 
//  }
//  echo "<hr>";
// echo "<pre>";
// print_r(array_count_values($colors));
// echo "</pre>";

#in_array() and array_search
// $colors = array('a'=>'red',5,2,'yellow','blue','green');
// echo "IN array".in_array('red',$colors)."<br>";
// echo "Search array - : ".array_search('red',$colors);

#array_replace,&array_replace_recursive
// $colors = array('red','yellow','blue','green');
// $name = array('dev','aditya','sonu');
// $newarray =  array_replace($colors,$name);
// $newarray1 = array_replace_recursive($colors,$name);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";


#array_pop and array_push
// $colors = ["red","yellow","blue","green"];
// array_push($colors,"red");
// array_pop($colors);
// echo "<pre>";
// print_r($colors);
// echo "</pre>";

#array_unshift and array_shift
// $colors = ["red","yellow","blue","green"];
// $colors1 = ["red","yellow","blue","green"];
// array_shift($colors);
// echo "<pre>";
// print_r($colors);
// echo "<pre>";
// echo "<hr>";
// array_unshift($colors1,"pink");
// echo "<pre>";
// print_r($colors1);
// echo "</pre>";

#array_merge and array_combine

// $colors = ["red","yellow","blue","green"];
// $name = ["dev","raju","aditya","sonu"];

// $newarray = array_merge($colors,$name);
// $newarray1 = array_combine($colors,$name);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";
// echo "<hr>";



#array_slice
// $colors = ["red","yellow","blue","green"];

// $newarray = array_slice($colors,0,3,true);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

#array_splice

// $colors = ["red","yellow","blue","green"];
// $name = ["dev","raju","aditya","sonu"];

// array_splice($colors,0,2,$name);

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// #array key
// $name = ["dev","raju","aditya","d"=>"sonu"];

// $newarray=array_keys($name);
// $newarray1=array_key_first($name);
// $newarray2=array_key_last($name);
// $newarray3=key_exists("5",$name);
// if($newarray3){
//     echo "key exists";

// }
// else{
//     echo "key Not Exists";
// }

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($newarray2);
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($newarray3);
// echo "</pre>";
// echo "<hr>";

#array_intersect

// function compare($name,$age) {
//     if($name===$age){
//         return 0;
//     }
//     return ($name>$age)? 1: -1;
    
// }

// $name = array("a"=>"dev","b"=>"raju","d"=>"aditya","b"=>"sonu");
// $age = array("a"=>"dev","b"=>"raju","c"=>"dd","a"=>"kk");
// $name1 = array("a"=>"dev","b"=>"raju","d"=>"aditya","b"=>"sonu");

// $newarray = array_intersect($name,$age,$name1);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "<hr>";
// $newarray1 = array_intersect_key($name,$age,$name1);

// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";
// echo "<hr>";
// $newarray2 = array_intersect_assoc($name,$age,$name1);

// echo "<pre>";
// print_r($newarray2);
// echo "</pre>";

// echo "<hr>";
// $newarray3 = array_intersect_uassoc($name,$age,"compare");

// echo "<pre>";
// print_r($newarray3);
// echo "</pre>";


#array_diff
// function compare($name,$age) {
//     if($name===$age){
//         return 0;
//     }    
//     return ($name>$age) ?1:-1;
// }


// $a = array("a"=>"dev","b"=>"raju","d"=>"aditya","e"=>"sonu");
// $b = array("a"=>"dev","b"=>"raju","c"=>"dd","a"=>"kk");
// $name = array("a"=>"dev","b"=>"raju","d"=>"aditya","e"=>"sonu");
// $age = array("a"=>"dev","b"=>"raju","c"=>"dd","f"=>"kk");


// $newarray= array_diff($b,$a);   

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// $newarray1= array_diff_key($a,$b);   

// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";

// $newarray2= array_diff_assoc($name,$age);   

// echo "<pre>";
// print_r($newarray2);
// echo "</pre>";

// $newarray3= array_diff_uassoc($name,$age,"compare");   

// echo "<pre>";
// print_r($newarray3);
// echo "</pre>";

// $newarray4= array_diff_ukey($name,$age,"compare");   

// echo "<pre>";
// print_r($newarray4);
// echo "</pre>";


#array_unique and array_values

// $name = array("a"=>"dev","b"=>"raju","d"=>"aditya","e"=>"sonu");
// $age = array("a"=>"dev","b"=>"raju","c"=>"dd","f"=>"kk");


// $newarray = array_values($name);  

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";



// $newarray1 = array_unique($name);  

// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";


// $marks= array(
//     array(
//         "phy"=>65,
//         "math"=>68,
//         "che"=>95
//     ),
//     array(
//         "phy"=>35,
//         "math"=>38,
//         "che"=>45
//     ),
//     array(
//         "phy"=>96,
//         "math"=>56,
//         "che"=>66
//     ),
//     array(
//         "phy"=>85,
//         "math"=>48,
//         "che"=>55
//     )
//     );

// $newarray = array_column($marks,"phy");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// $newarray1 = array_chunk($marks,4,true);

// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";

// $newarray=range(1,10,1);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// $newarray1=range('a','z');

// echo "<pre>";
// print_r($newarray1);
// echo "</pre>";

// foreach(range('a','z') as $letter){
//     echo $letter."<br>";
// }
?>

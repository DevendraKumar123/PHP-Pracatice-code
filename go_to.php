<?php
echo "Go To Stetement<br>";

// $x=10;
// echo "before condition <br>";
// if($x==20){
//     goto jump;
// }
// $name="Dev Kumar";
// echo $name;


// jump:
// echo "Statement is jumped on line no. 15"
for($i=0;$i<10;$i++){
    echo "$i <br>";
    if($i==5){
        goto outside_loop;
    }
}
outside_loop:
echo "loop is break";
?>
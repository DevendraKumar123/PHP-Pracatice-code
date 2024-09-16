<?php
$emp=[
    [1,"krishna","manager",5000],
    [2,"salmam","salasman",8000],
    [3,"mohan","opt",10000],
    [4,"amir","driver",9000],
];
echo $emp[0][0]."<br>";
echo $emp[0][1]."<br>";
echo $emp[0][2]."<br>";
echo $emp[0][3]."<br>";

for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
    echo $emp[$row][$col]." ";
    }
    echo "<br>";
}
echo "<table border='2px' cellpadding='5px cellspecing='0px'>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2</td> ";
    }
    echo "<tr>";
}
echo "</table>";
echo "<pre>";
print_r ($emp);
echo "</pre>";

?>

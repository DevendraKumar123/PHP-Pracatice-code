<?php
// *
// * * 
// * * *
// * * * *
// * * * * *

// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5

// 1
// 1 2
// 1 2 3
// 1 2 3 4
// 1 2 3 4 5
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         // echo " * ";    #1
//         // echo $i."  ";   #2
//         echo $j."  ";     #3
//     }
//     echo "<br>";


// }
?>

<?php
// * * * * *
// * * * * 
// * * * 
// * *
// *

// 5 5 5 5 5
// 4 4 4 4
// 3 3 3
// 2 2
// 1

// 1 2 3 4 5
// 1 2 3 4
// 1 2 3
// 1 2
// 1

// for ($i = 5; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo " * ";    #1
//         // echo $i."  ";   #2
//         // echo $j."  ";     #3
//     }
//     echo "<br>";
// }
?>

<?php
//       *       
//     * * *     
//   * * * * *   
// * * * * * * *

//      1       
//     2 2 2     
//   3 3 3 3 3   
// 4 4 4 4 4 4 4

//        4       
//      3 4 5     
//    2 3 4 5 6   
//  1 2 3 4 5 6 7

// $n = 4;
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= (2 * $n) - 1; $j++) {
//         if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
//             // echo " * ";
//             // echo " $i ";
//             echo " $j ";
//         } else {
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";

// }


?>

<?php
// D
// E E
// V V V
// E E E E
// N N N N N
// D D D D D D
// R R R R R R R
// A A A A A A A A

// D
// D E
// D E V
// D E V E
// D E V E N
// D E V E N D
// D E V E N D R
// D E V E N D R A

$str="DEVENDRA";
$count=strlen($str);
// for($i=0;$i<$count;$i++){
//     for($j=0;$j<=$i;$j++){
//         // echo " $str[$i] "; #1
//         echo " $str[$j] "; #2

//     }
//     echo "<br>";
// }

// A A A A A A A A
// R R R R R R R
// D D D D D D
// N N N N N
// E E E E
// V V V
// E E
// D

// D E V E N D R A
// D E V E N D R
// D E V E N D
// D E V E N
// D E V E
// D E V
// D E
// D
for($i=7;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        // echo " $str[$i] "; # 1
        echo " $str[$j] "; # 2
    }
    echo "<br>";
}
?>
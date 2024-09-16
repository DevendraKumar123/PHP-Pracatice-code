<?php

$marks= [
    "Krishna"=>[
        "phy"=>65,
        "math"=>68,
        "che"=>95
    ],
    "Mohan"=>[
        "phy"=>35,
        "math"=>38,
        "che"=>45
    ],
    "Salman"=>[
        "phy"=>96,
        "math"=>56,
        "che"=>66
    ],
    "Dev"=>[
        "phy"=>85,
        "math"=>48,
        "che"=>55
    ]
];



echo "<table border='2px' cellpadding='5px cellspecing='0px' bgcolor='red' color='yellow'>
<tr>
<th>Name</th>
<th>Phy</th>
<th>Math</th>
<th>Che</th>
";
    foreach($marks as $key=> $v1){
        echo "<tr><td>$key</td>";
        foreach($v1 as $v2){
            echo "<td>$v2</td> ";
        }
        echo "<tr>";
};

echo "</table>";
echo "<pre>";
print_r ($marks);
echo "</pre>";



?>




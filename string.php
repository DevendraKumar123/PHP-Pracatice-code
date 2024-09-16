<?php
#explode and implode and join
// $a="Hello How are YOU";
// $b=array("hello","how" ,"are", "you");

// $newarray = explode(" ",$a);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// $newarray1 = implode("-",$b);

// echo $newarray1."<br>";

// $newarray2 = join(",",$b);

// echo $newarray2;

# str_split and chunk_split
// $a="Hello";
// $newarray = str_split($a,2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// $str = chunk_split($a,1,",");
// echo $str;

#strtolower,strtoupper,ucfirst,ucwords,lcfirst

// $str="Devendra Kumar";
// $lower= strtolower($str);
// echo "Lower Case ".$lower;
// echo "<hr>";

// $upper= strtoupper($str);
// echo "Upper Case ".$upper;
// echo "<hr>";

// $ufirst= ucfirst($str);
// echo "First Letter Upper ".$ufirst;
// echo "<hr>";

// $uword= ucwords($str);
// echo "First Letter Upper ".$uword;
// echo "<hr>";

// $lfirst= lcfirst($str);
// echo "First Letter Upper ".$lfirst;
// echo "<hr>";

#strlen,str_word_count

// $a="Hello World";
// $strlen = strlen($a);
// $strcount =str_word_count($a);
// $sub= substr_count($a,'f',0);
// echo "String length ".$strlen;
// echo "<hr>";
// echo "String world count ".$strcount;
// echo "<hr>";
// echo "Sub  String count ".$sub;
#strpos,strrpos,strripos,stripos

// $a="I love php";

// echo strpos($a,"php",0)  ."<br>";
// echo strrpos($a,"Php",0) ."<br>";
// echo stripos($a,"LOVE",0) ."<br>";
// echo strripos($a,"PHP",0)."<br>";


#strstr,stristr,strchr,strrchr,strpbrk

// $a="I love php.I love PHP too";
// echo "strstr : ".strstr($a,"php",true)."<br>";
// echo "stristr : ".stristr($a,"PHP",)."<br>";
// echo "strchr : ".strchr($a,"php",)."<br>";
// echo "strrchr : ".strrchr($a,"php",)."<br>";
// echo "strpbrk : ".strpbrk($a,"t",)."<br>";

#substr
// $a="I love php.I love PHP too";
// echo $a ."<br>";
// echo "Substr : ".substr($a,5,10)."<br>";
// echo "Substr : ".substr($a,-5)."<br>";


#str_replace,str_ireplace,substr_replace,strtr

// $a="I love php.I love PHP too";
// echo "Original String : ".$a."<br>";
// echo "str_replace : ".str_replace("php","python",$a)."<br>";
// echo "sub_replace : ".substr_replace($a,"php",0,0)."<br>";
// echo "strtr : ".strtr($a,"ov","ek")."<br>"; 



#strcmp,strncmp,strcasecmp,strncasecmp,strnatcmp,strnatcasecmp,substr_compare,similar_text
// $a= "1Helloooo";
// $b = "5hellopooo";

// echo "case senstive"."<br>";
// echo "strcmp : ".strcmp($a,$b)."<br>";
// echo "strncmp : ".strncmp($a,$b,2)."<br>";
// echo "strnatcmp : ".strnatcmp($a,$b)."<br>";


// echo "<hr> "."case in senstive"."<br>";
// echo "strcasecmp : ".strcasecmp($a,$b)."<br>";
// echo "strncasecmp : ".strncasecmp($a,$b,5)."<br>";
// echo "strnatcasecmp : ".strnatcasecmp($a,$b)."<br>";
// echo "<hr>";
// echo "Sub string compare : ".substr_compare($a,$b,5)."<br>";

// echo "<hr>";
// echo "Similar text : ".similar_text($a,$b,$per)."<br>";
// echo "percentage : ".$per;



#strrev and str_shuffle

// $a="Hello";
// echo "string revers : ".strrev($a)."<br>";
// echo "string Shuffle : ".str_shuffle($a)."<br>";

#str_pad and str_repeat
// $a="Hello";
// echo "string padding :".str_pad($a,10,"+",STR_PAD_BOTH)."<br>";
// echo "string repeat :".str_repeat($a,5);

#trim function

// $a="Hellolonjnjooo";
// echo "string Trim :".trim($a,"o")."<br>";
// echo "string Trim :".rtrim($a,"o")."<br>";
// echo "string Trim :".ltrim($a,"o")."<br>";
?>
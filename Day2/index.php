<?php
////declare indexed array
//$names=array("Mahmoud","Ali","Khaled");
//var_dump($names);
////print_r($names)."<br>";
//$mobiles=["Samsung","iPhone","Opoo"];
////array_pop($mobiles);
//print_r($mobiles);
//echo $mobiles[0],$mobiles[1],$mobiles[2];
//$count=count($mobiles);
//echo "<hr>";
//echo"Eslam Task<br>";
//for($i=0;$i<$count;$i++){
//    echo $mobiles[$i]."<br>";
//}
//echo "<hr>";
//echo"iman Task<br>";
//$x=0;
//while($x<$count){
//
//    echo $mobiles[$x]."<br>";
//    $x++;
//}
//echo "<hr>";
//echo"Yasmin Task<br>";
//
//$i=0;
//do{
//
//    echo $mobiles[$i]."<br>";
//    $i++;
//}while($i<$count);
//echo "<hr>";
//echo"Yasmin another Task<br>";
//foreach($mobiles as $mobile){
//    echo $mobile."<br>";
//}
//echo "<hr>";
//
//echo gettype($mobiles);
//echo"<pre>";
////print_r($mobiles);
//echo"</pre>";
//echo"<hr>";
////declare Associative array
//$family=[
//    "Father"=>"Ali",
//    "mother"=>"Asmaa",
//    "Son"=>"Ashraf",
//];
//foreach($family as $key=>$value){
//    echo $key."-".$value."<br>";
//}
//echo $family["Father"]."<br>";
//print_r($family);
//echo"<hr>";
////Multi dimension array
$SWDF=[
    "Course1"=>"Softskills",
    "programming"=>["A"=>"OOP","OS","PHP"],
    "Project"=>"Website Project"
];
//echo gettype($SWDF)."<br>";
//echo $SWDF["programming"][0]."<br>";
//echo $SWDF["programming"]["A"]."<br>";
//print_r($SWDF);
$cities=["Luxor","Aswan","Qena","Sohag"];
var_dump($cities);
//sort($cities);
//rsort($cities);
//array_pop($cities);
//array_shift($cities);
array_push($cities,"cairo");
//array_unshift($cities,"cairo");

var_dump($cities);

//answer for No. 7
foreach ($SWDF as $key1=>$value1)
{
    if (is_array($value1))
    {
        foreach ($value1 as $key2=>$value2)
        {
            echo $key2.": ".$value2."<br>";
        }
    }else{
        echo $key1.": ".$value1."<br>";
    }
}

<?php
//declare indexed array
//$names=array("Mahmoud","Ali","Khaled");
//print_r($names)."<br>";
$mobiles=["Samsung","iPhone","Opoo"];
echo $mobiles[1]."<hr>";
$count=count($mobiles);
//for($i=0;$i<$count;$i++){
//    echo $mobiles[$i]."<br>";
//}
$i=0;
//while($i<$count){
//    echo $mobiles[$i];
//    $i++;
//}
//do{
//    echo $mobiles[$i];
//    $i++;
//}while($i<$count);

echo gettype($mobiles);
echo"<pre>";
//print_r($mobiles);
echo"</pre>";
echo"<hr>";
//declare Associative array
$family=[
    "Father"=>"Ali",
    "Son"=>"Ashraf",
];
echo $family["Father"]."<br>";
print_r($family);
echo"<hr>";
//Multi dimension array
$SWDF=[
    "Course1"=>"Softskills",
    "programming"=>["A"=>"OOP","OS","PHP"],
    "Project"=>"Website Project"
];
echo gettype($SWDF)."<br>";
echo $SWDF["programming"][0]."<br>";
echo $SWDF["programming"]["A"]."<br>";
print_r($SWDF);

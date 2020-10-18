<?php

function mul($max) {
    return $max*2;
};

echo mul(10);
?>

<?php
function f($a, $b){
    $sum = $a + $b;
    return $sum;
}
$sum = f(1,2);
echo $sum;

//3
function a($arr){
    $result = $arr[0];
    for ($i = 1;$i < count($arr); $i++){
        $result *= $arr[$i];
    }
   return $result; 
}
echo a(array(1,3,5,7,9));

//4

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
      if($max_number < $a){
          $max_number = $a;
      }
}   
   return $max_number;
}
echo max_array(array(7,1,3,4,5));
?>

<!--5-->
<?php
$str = "<h1>あいうえお</h1>"
."<p>取り除く</p>";
echo strip_tags($str)."<br>";
?>
<?php
$stack = array("orange","banana");
array_push($stack,"apple","raspberry");
echo ($stack);
?>

<?php
$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];

$array = array_merge($array1,$array2,$array3);
echo ($array);
?>

<?php
$time = mktime(0,0,0,1,1,2020);
var_dump(date('Y年m月h時i分s秒',$time));
echo ('<br/>');
?>

<?php
date_default_timezone_set('Asia/Tokyo');
echo '<p>',date('Y/m/d H:i:s'),'</p>';
?>

    
    
    
    
    
    
    
    

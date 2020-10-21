<?php
$name = "Yudai";
if($name = "Yudai"){
    echo "私は$nameです";
} else {
    echo "あなたの名前ではありません";
}

for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("イチゴ","リンゴ","バナナ","メロン","ブドウ");

foreach($fruits as $item){
    echo $item;
    echo "/n";
}

for($i = 1;$i <= 100;$i++){
    if($i % 5 ==0){
        echo $i;
    }
}

<?php
// 1
function doubleNumber($i){
    return $i * 2;
}
$result = doubleNumber(3);
echo $result . "\n";


// 2
function add($a, $b){
    return $a + $b;
}
$result = add(1, 3);
echo $result . "\n";


// 3
$a=array(1,3,5,7,9);
echo(array_product($a)) . "\n";



// 4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($arr > $a)
    echo max_array(100);
    }
    return $max_number;
  }


// 5
//strip_tags:タグを取り除く
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) . "\n";

//array_push:配列の最後に要素を追加する
$name = array("a","b","c");
            array_push($name,"d","e");
            print_r($name) . "\n";

//array_merge:一つまたは複数の配列を結合する
$array1 = [1, 2,];
$array2 = [3, 4,];
$array3 = [5, 6];
$array = array_merge($array1, $array2, $array3);
print_r($array) . "\n";

//time, mktime:UNIXタイムスタンプを取得する
$time = mktime(9);
  var_dump(date('2024年10月26日0時0分0秒', $time)) . "\n";

//date:日付文字列を返す関数
echo date('Y/m/d') . "\n";



  
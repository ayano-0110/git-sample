<?php
echo "Hello PHP!" . "\n";

$name = "Ayano";
if ($name = "Ayano") {
    echo "私は $name です" . "\n";
} else {
    echo "私は $name ではありません" . "\n";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total . "\n";

$fruits = array("apple","lemon","banana","orange","grape");
foreach($fruits as $fruits) {
    echo $fruits . "\n";
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}
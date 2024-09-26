<?php
echo "hello php!\n";

$a = 3;
echo $a . "\n";

$interger = 10;
echo $interger . "\n";
$interger = 20;
echo $interger . "\n";

$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。\n";
} else {
  echo "ご乗車になれます。" . PHP_EOL;
}


$string = "abc";
echo $string . "\n";

$value = 10;
$result = $value == 20;
var_dump($result);

$a = "3";
echo $a;
$b = "7";
echo $b;
$c = $a + 7;
echo $c . "\n";

$array_month = [1,2,3,4,5,6,7,8,9,10,11,12];
echo $array_month[7] . "\n";
$array_month = ["1月","2月","3月"];
echo $array_month[0] . "\n";


<?php
echo 'hello php!' . "\n";

$a = 3;
$b = 7;
echo $a+$b . "\n";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月",];
echo $array_month[7] . "\n";

$hello = "Hello,";
$name = "Ayano";
$world = "'s World!";
echo $hello . $name . $world . "\n";

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost . "\n";

$FY2018_calendar = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
 ];
  echo $FY2018_calendar["December"] . "\n";












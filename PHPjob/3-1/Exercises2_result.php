<?php

//②のフォームからのデータを受け取ります
$name = $_POST["name"];
$number = $_POST["number"];



//③受け取った数字に1~6までのランダムな数字を掛け合わせて変数に入れてください
  $result = $number * mt_rand(1, 6);


//④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if ($result>=1 && $result <=10){
    $fortune = "凶";
}elseif ($result >=11 && $result <=15 ) {
    $fortune = "末吉";
}elseif ($result >=16 && $result <=20 ) {
    $fortune = "中吉";
}elseif ($result >=21 && $result <=25 ) {
    $fortune = "吉";
}elseif ($result >=26 && $result <=30 ) {
    $fortune = "大吉";
}else {
    $fortune = "残念";
}

//⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう


echo date("Y-m-d H:i:s", strtotime('+9hour'));
echo '<br>';

echo "名前は" .$name. "です。" ;
echo '<br>';

echo "番号は" .$result. "です。";
echo '<br>';

echo "結果は" .$fortune. "です。";
echo '<br>';


?>







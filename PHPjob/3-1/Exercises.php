<?php

const TAX = 1.10;
$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

function include_tax($price) {
    //鉛筆
    return $price = 100 * TAX;
    //消しゴム
    return $price = 150 * TAX;
    //物差し
    return $price = 500 * TAX;
}

foreach($products as $key => $price) {
    echo $key. "の税込価格は" .$price. "円です";
    echo '<br>';
}
?>
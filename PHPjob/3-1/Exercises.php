<?php

const TAX = 1.10;
$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

function include_tax($price) {
    //鉛筆
    return $price * TAX;
}

foreach($products as $key => $price) {
    print $key. "の税込価格は" ;
    print include_tax($price);
    print "円です";
    echo '<br>';
}
?>
<?php

// 男性ユーザーデータの配列
$users = [
    ['name' => '山田一郎', 'height' => 170, 'hobby' => 'バスケットボール', 'age' => 28],
    ['name' => '山田次郎', 'height' => 165, 'hobby' => '野球', 'age' => 26],
    ['name' => '山田三郎', 'height' => 181, 'hobby' => '映画鑑賞', 'age' => 30],
    ['name' => '山田四郎', 'height' => 155, 'hobby' => 'サッカー', 'age' => 24]
];



foreach ($users as $user){
    if ($user['height'] >= 170) {
        echo $user['name'];
        echo '<br>';
    }
}


?>

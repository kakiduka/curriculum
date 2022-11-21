<?php
function Rectangular($beside, $vertical, $height) {
    $area = $beside * $vertical * $height;
    print "直方体の面積は".$area. "だよ。";
}

Rectangular(10,5,8);

?>

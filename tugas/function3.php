<?php
function hitungLuasPersegi($sisi){
    return $sisi * $sisi;
}

$sisi = 5;
$luas = hitungLuasPersegi($sisi);
echo "Luas Persegi dengan sisi $sisi adalah : $luas";
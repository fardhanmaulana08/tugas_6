<?php
function hitungTotalNilai($nilai)
{
    return array_sum($nilai);
}
$dataNilai = [80, 75, 90, 85];

echo hitungTotalNilai($dataNilai);
?>
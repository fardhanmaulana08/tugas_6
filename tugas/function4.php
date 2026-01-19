<?php
function cekKelulusan($nilai) {
    if ($nilai >= 75) {
        return "lulus";
    } else {
        return "tidak lulus";
    }
}

echo cekKelulusan(80) . "<br>";
echo cekKelulusan(60);

?>
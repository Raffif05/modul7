<?php
function hitungRataRata($nilai) {
    return array_sum($nilai) / count($nilai);
}

function nilaiTertinggiDanTerendah($nilai) {
    $nilaiTertinggi = max($nilai);
    $nilaiTerendah = min($nilai);
    return array('tertinggi' => $nilaiTertinggi, 'terendah' => $nilaiTerendah);
}

function statusKelulusan($rataRata) {
    if ($rataRata >= 60) {
        return "Lulus";
    } else {
        return "Gagal";
    }
}

$nilaiMahasiswa = array(75, 80, 65, 90, 55);

echo "Nilai mahasiswa: " . implode(" ", $nilaiMahasiswa) . "<br>";

$rataRata = hitungRataRata($nilaiMahasiswa);
echo "Rata-rata nilai mahasiswa: " . round($rataRata) . "<br>";

$nilai = nilaiTertinggiDanTerendah($nilaiMahasiswa);
echo "Nilai tertinggi: " . $nilai['tertinggi'] . "<br>";
echo "Nilai terendah: " . $nilai['terendah'] . "<br>";

$status = statusKelulusan($rataRata);
echo "Status kelulusan: " . $status;
?>

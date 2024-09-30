<?php
// $data: Array yang berisi kumpulan angka.
// $cari: Angka yang ingin dihitung kemunculannya dalam array $data.
function hitungAngka($data, $cari) {
    // variabel $jumlah dengan nilai 0 untuk menyimpan jumlah kemunculan.
    $jumlah = 0;
    // loop elemen ($nilai) dibandingkan dengan nilai yang dicari ($cari). Jika elemen sama dengan nilai yang dicari, jumlah kemunculan ($jumlah) ditambah.
    foreach ($data as $nilai) {
        if ($nilai == $cari) {
            $jumlah++;
        }
    }

    // Increment $jumlah digunakan untuk menghitung berapa kali nilai yang dicari ($cari) muncul dalam array ($data).
    // jadi Hasil akhirnya nilai $jumlah, memberikan informasi tentang seberapa umum atau langkanya nilai yang dicari dalam array.
    echo "Jumlah angka " . $cari . " = " . $jumlah . "<br>";
}

// Array $data berisi angka
$data = [80, 90, 75, 100, 85, 100, 66];
// Angka yang dicari ($cari) adalah 100.
$cari = 100;

// Fungsi hitungAngka($data, $cari) dipanggil untuk menghitung berapa kali angka 100 muncul dalam array $data.
hitungAngka($data, $cari);
?>

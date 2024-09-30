<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function hitungPecahan($jumlahUang) {
    // $pecahan berisi array dari pecahan uang yang tersedia, mulai dari yang terbesar (Rp. 100.000) hingga yang terkecil (Rp. 50).
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50];
    // $hasil adalah array kosong yang akan menyimpan jumlah lembar untuk setiap pecahan.
    $hasil = [];

    // menampilkan jumlah uang yang ingin dihitung dengan format rupiah.
    echo "Uang: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>";
    echo "Lembar Rupiah:<br>";

    // Loop foreach untuk menghitung setiap pecahan uang dalam array $pecahan.
    foreach ($pecahan as $uang) {
        if ($jumlahUang >= $uang) {
            // Hitung jumlah lembar pecahan yang dibutuhkan menggunakan floor($jumlahUang / $uang).
            $jumlahLembar = floor($jumlahUang / $uang);
            // Kurangi jumlah uang dengan jumlah lembar pecahan yang digunakan ($jumlahLembar * $uang).
            $jumlahUang -= $jumlahLembar * $uang;
            // Simpan hasil dalam array $hasil dengan kunci sebagai pecahan uang dan nilai sebagai jumlah lembar.
            $hasil[$uang] = $jumlahLembar;
        }
    }

    // Loop foreach menampilkan array $hasil, array $hasil untuk menampilkan jumlah lembar untuk setiap pecahan uang yang digunakan.
    foreach ($hasil as $uang => $jumlahLembar) {
        echo "Rp. " . number_format($uang, 0, ',', '.') . " : " . $jumlahLembar . "<br>";
    }
}

// untuk memasukan jumlah uang yang akan kamu hitung pecahannya
hitungPecahan(140500);
?>

</body>
</html>
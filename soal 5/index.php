<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bil1 = [80, 91, 65, 89, 55, 12, 90, 86];
$bil2 = [91, 99, 55, 81, 45, 90, 91, 98];

// Fungsi array_intersect digunakan untuk mencari elemen yang terdapat di kedua array, Hasilnya disimpan di bilanganTidakSama.
$bilanganSama = array_intersect($bil1, $bil2);

// Fungsi array_diff digunakan untuk mendapatkan elemen yang hanya ada di bil1 dan tidak ada di bil2, Hasilnya disimpan di bilanganTidakSama.
$bilanganTidakSama = array_diff($bil1, $bilanganSama);

// menggabungkan hasil bilangan yang sama dengan pemisah titik (.) dan menampilkannya.
echo "Bilangan yang ada di kedua variabel:<br>";
echo implode('.', $bilanganSama) . "<br><br>";

// menggabungkan bilangan yang hanya ada di bil1 dengan pemisah koma (,) dan menampilkannya.
echo "Bilangan yang tidak ada di kedua variabel:<br>";
echo implode(',', $bilanganTidakSama) . "<br>";
?>
</body>
</html>
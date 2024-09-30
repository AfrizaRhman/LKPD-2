<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Fungsi ini melakukan loop dari angka 1 hingga 11.
function tampilkanPerkalianGanjil() {
    // Pada setiap iterasi, angka ($i) dikalikan dengan 5 dan hasilnya disimpan dalam variabel $hasil.
    for ($i = 1; $i <= 11; $i++) {
        $hasil = $i * 5;

        // Memeriksa apakah hasil perkalian ganjil, jika ganjil hasil perkalian diperiksa dengan menggunakan operator modulus (%). Jika hasil tidak habis dibagi 2 ($hasil % 2 != 0), maka hasilnya adalah bilangan ganjil.
        if ($hasil % 2 != 0) {
            echo "$i * 5 = $hasil<br>";
        }
    }
}

tampilkanPerkalianGanjil();
?>


</body>
</html>
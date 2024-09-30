<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urutan Perkalian</title>
</head>
<body>
    <h2>Urutan Perkalian dari 1 * 1 sampai 2 * 10</h2>
    <ul>
     <?php
    //  loop pertama untuk mengatur angka pertama dalam perkalian yaitu 1 & 2
    for ($i = 1; $i <= 2; $i++) {
        // loop kedua untuk mengatur angka kedua dalam perkalian yaitu dari 1 - 10
    for ($j = 1; $j <= 10; $j++) {
        // Setiap kombinasi i dan j dikalikan, dan hasilnya dicetak dalam format: $i * $j = hasil.
    echo "$i * $j = " . ($i * $j) . "<br>";
    }
    // Setelah setiap seri perkalian untuk angka 1 dan 2, terdapat <br> yang memisahkan hasil perkalian agar lebih mudah dibaca
    echo "<br>";
    }
     ?>
    </ul>
</body>
</html>
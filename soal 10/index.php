<?php
// Fungsi dari function kategoriUsia ini untuk menerima sejumlah argumen usia dan menyimpannya dalam array $usia.
function kategoriUsia(...$usia) {

    // dalam $arrayUsia adalah array yang digunakan untuk menyimpan kategori usia berdasarkan nilai dari parameter.
    $arrayUsia = [];
    // Loop foreach digunakan untuk memeriksa setiap usia dalam array $usia.
    foreach($usia as $key => $value) {
        // Jika usia ($value) lebih besar dari atau sama dengan 17, maka usia tersebut dikategorikan sebagai "dewasa".
        if($value >= 17) {
            $arrayUsia[$key] = "dewasa";
            // Jika usia kurang dari 17, maka dikategorikan sebagai "anak-anak".
        } else {
            $arrayUsia[$key] = "anak-anak";
        }
    }

    // menggabungkan semua usia menjadi string, dipisahkan dengan koma, dan menampilkannya.
    echo "List Usia : " . implode(',', $usia) . "<br>";
    // menghitung jumlah usia yang dikategorikan sebagai "dewasa".
    echo "Usia Dewasa : " . count(array_keys($arrayUsia, "dewasa")) . "<br>";
    // menghitung jumlah usia yang dikategorikan sebagai "anak-anak".
    echo "Usia Dewasa : " . count(array_keys($arrayUsia, "anak-anak")) . "<br>";

}

// daftar list usia
    kategoriUsia(12,15,17,20,25,30,35,40,45,50);

?>
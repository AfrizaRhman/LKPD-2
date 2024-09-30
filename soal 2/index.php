<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>
<body>
    <?php
    // Fungsi ini menerima parameter $lamaKerja, yang mewakili jumlah jam kerja.
        function hitungKompensasi($lamaKerja) {
            // Jam kerja standar adalah 8 jam
            $jamKerjaStandar = 8;
            $kompensasi = 0;
        
            // Jika $lamaKerja lebih dari 8 jam, maka dihitung jam lembur ($jamLebih), dan kompensasi akan diberikan.
            if ($lamaKerja > $jamKerjaStandar) {
                $jamLebih = $lamaKerja - $jamKerjaStandar;
        
                // Hitung kompensasi untuk jam pertama
                $kompensasi += 50000;
        
                // Jika lebih dari 1 jam, hitung sisa jam dengan tarif Rp. 25.000 per jam
                if ($jamLebih > 1) {
                    $kompensasi += ($jamLebih - 1) * 25000;
                }
            }
        
            //return $kompensasi untuk mengembalikan nilai variabel $kompensasi yang berisi total kompensasi yang telah dihitung.
            return $kompensasi;
        }
        
        // Contoh penggunaan
        $lamaKerja = 14;  // Misalnya, lama kerja adalah 14 jam
        $jamLebih = $lamaKerja - 8;
        //Memanggil fungsi hitungKompensasi dengan parameter $lamaKerja untuk menghitung total kompensasi berdasarkan jumlah jam kerja yang diberikan. Hasil perhitungan fungsi ini disimpan dalam variabel $kompensasi.
        //$kompensasi Menyimpan hasil kompensasi yang dihitung dengan fungsi hitungKompensasi.
        $kompensasi = hitungKompensasi($lamaKerja);
        
        // Menampilkan teks yang menunjukkan jumlah jam kerja, yaitu 14 jam, menggunakan variabel $lamaKerja.
        echo "Lama Kerja : $lamaKerja Jam<br>";
        // menunjukkan jumlah jam di atas jam standar (8 jam), yaitu 6 jam, menggunakan variabel $jamLebih.
        echo "Jam Lebih : $jamLebih Jam<br>";
        // Fungsi number_format digunakan untuk memformat angka $kompensasi dengan pemisah ribuan berupa titik (.) dan tanpa desimal.
        echo "Jumlah Kompensasi : Rp. " . number_format($kompensasi, 0, ',', '.') . "<br>";
        ?>
</body>
</html>
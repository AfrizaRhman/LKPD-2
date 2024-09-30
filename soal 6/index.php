<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Array $student Ini adalah array multidimensi yang menyimpan informasi tentang siswa (nama) dan daftar nilai mereka (nilai).
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

// loop foreach untuk menelusuri setiap siswa dalam array $students dan juga mengambil data nama siswa ($nama) dan daftar nilai siswa ($nilai).
foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    // Menghitung rata-rata nilai dan ditampilkan dengan format: Nama = Rata-rata
    
    // array_sum($nilai) menjumlahkan semua nilai siswa.
    $totalNilai = array_sum($nilai);
    // count($nilai) menghitung berapa banyak nilai yang dimiliki siswa.
    $jumlahNilai = count($nilai);
    // Rata-rata dihitung dengan membagi total nilai dengan jumlah nilai: $rataRata = $totalNilai / $jumlahNilai.
    $rataRata = $totalNilai / $jumlahNilai;

    // Fungsi round() digunakan untuk membulatkan rata-rata hingga dua angka desimal.
    echo " $nama =  " . round($rataRata, 2) . "<br>";
}
?>

</body>
</html>
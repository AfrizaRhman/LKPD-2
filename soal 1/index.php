<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek String</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.6;
        }

        /* Media Query untuk layar kecil */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
                width: 95%;
            }

            input[type="text"], 
            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }

            .result {
                font-size: 16px;
            }
        }

        /* Media Query untuk tablet */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 90%;
            }

            input[type="text"], 
            input[type="submit"] {
                font-size: 15px;
                padding: 9px;
            }

            .result {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cek String</h1>
        <form action="" method="post">
            <label for="teks">Masukkan teks:</label>
            <input type="text" id="teks" name="teks" />
            <input type="submit" value="Cek" />
        </form>
        <?php
        // untuk mengecek teks apakah mengandung angka atau tidak
        class cekString {
            private $teks;

            // __construct($teks) ini berfungsi untuk menginisialisasi objek dengan nilai awal yang diberikan. Dalam kasus ini, konstruktor menyimpan nilai teks yang diberikan ke dalam properti objek.
            // lalu Properti $teks dapat digunakan dalam metode lain dari kelas, seperti cekAngka dan juga untuk memproses teks yang diberikan.
            public function __construct($teks) {
                $this->teks = $teks;
            }
            // preg_replace berfungsi untuk mengambil angka dan mengahapus karakter non-numerik
            public function cekAngka() {
                $angkaHasil = preg_replace('/[^0-9]/', '', $this->teks);

                if ($angkaHasil) {
                    // fungsi dari str_split($angkaHasil, 1) untuk memecah string $angkaHasil menjadi array di mana setiap elemen adalah satu karakter dari string
                    $angkaArray = str_split($angkaHasil, 1);
                    return "Teks mengandung angka: " . implode(', ', $angkaArray);
                } else {
                    return "Teks tidak mengandung angka.";
                }
            }
        }
        // di bawah ini akan memproses kelas cekstring dan hasil pengecekannya apakah teks mengandung angka yang akan menampilkan di bawah form
        if (isset($_POST['teks'])) {
            $cekString = new cekString($_POST['teks']);
            echo "<p class='result'>" . $cekString->cekAngka() . "</p>";
        }
        ?>
    </div>
</body>
</html>

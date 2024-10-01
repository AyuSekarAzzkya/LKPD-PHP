<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Angka</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="name" placeholder="Masukan Teks">
    <button type="submit">Cek Teks</button>
    </form> 

        <?php
        if($_SERVER ['REQUEST_METHOD'] == "POST"){  //mengambil nilai dari variabel name yang dikirim melalui metode POST.
            $name = $_POST ['name'];
            $numbers = preg_replace('/\D/', '', $name); //menghapus semua karakter non digit
            if ($numbers !== '') { // memerikasa apakah var $number tidak kosong
                echo "Teks mengandung angka: $numbers";// jika tidak maka tampilkan teks ini
            } else {
                echo "Teks tidak mengandung angka."; 
            }   
        }
        ?>

    </body>
</html>

<?php
function umur() {
    $usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    
    // Inisialisasi penghitung untuk usia anak-anak dan dewasa
    $jumlahAnak = 0;
    $jumlahDewasa = 0;

    // Iterasi melalui array usia
    foreach ($usia as $age) {
        // Memeriksa apakah usia kurang dari 17
        if ($age < 17) {
            $jumlahAnak++;
        } else {
            // Jika usia 17 tahun atau lebih, dianggap sebagai dewasa
            $jumlahDewasa++;
        }
    }

    // Menampilkan hasil
    echo "List Usia :" . implode(", ", $usia). "<br>";
    echo "Jumlah kategori dewasa: $jumlahDewasa<br>";
    echo "Jumlah Kategori Anak-Anak: $jumlahAnak<br>";

    // Mengembalikan hasil sebagai array
    return [
        'anak' => $jumlahAnak,
        'dewasa' => $jumlahDewasa
    ];
}
    $hasil = umur();

?>

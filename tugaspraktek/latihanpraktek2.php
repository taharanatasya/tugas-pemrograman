<?php

// Contoh data (ganti dengan data Anda sendiri)
$data = array(
    array(
        "kategori" => 1, // Sesuaikan dengan NRP Anda % 5
        "nama" => "Tari Kecak",
        "deskripsi" => "Tari tradisional Bali",
        "gambar" => "img/c:\Users\ASUS\Documents\PEMROGRAMAN WEB 1\BELAJAR HTML\img\tari kecak.png", // Ganti dengan path gambar
        "lokasi" => "Bali",
        "detail" => "Detail tentang Tari Kecak"
    ),
    array(
        "kategori" => 2, // Sesuaikan dengan NRP Anda % 5
        "nama" => "Marie Curie",
        "deskripsi" => "Ilmuwan fisika dan kimia",
        "gambar" => "c:\Users\ASUS\Documents\PEMROGRAMAN WEB 1\BELAJAR HTML\img\marie curei.jpg", // Ganti dengan path gambar
        "penemuan" => "Radioaktivitas",
        "detail" => "Detail tentang Marie Curie"
    ),
    // Tambahkan minimal 8 data lagi di sini...
    array(
        "kategori" => 3,
        "nama" => "Komodo",
        "deskripsi" => "Reptil purba",
        "gambar" => "c:\Users\ASUS\Documents\PEMROGRAMAN WEB 1\BELAJAR HTML\img\komodo.jpg",
        "lokasi" => "Nusa Tenggara",
        "detail" => "Detail tentang Komodo"
    ),
    array(
        "kategori" => 4,
        "nama" => "Cut Nyak Dien",
        "deskripsi" => "Pahlawan Nasional Indonesia",
        "gambar" => "c:\Users\ASUS\Documents\PEMROGRAMAN WEB 1\BELAJAR HTML\img\cut nyak dien.jpg",
        "peran" => "Pejuang kemerdekaan",
        "detail" => "Detail tentang Cut Nyak Dien"
    ),
    array(
        "kategori" => 0,
        "nama" => "Gojek",
        "deskripsi" => "Perusahaan teknologi",
        "gambar" => "c:\Users\ASUS\Documents\PEMROGRAMAN WEB 1\BELAJAR HTML\img\gojek.jpg",
        "layanan" => "Transportasi dan lain-lain",
        "detail" => "Detail tentang Gojek"
    )

);


// Menampilkan data dalam tabel
echo "<h2>Data</h2>";
echo "<table border='1'>";
echo "<tr><th>Kategori</th><th>Nama</th><th>Deskripsi</th><th>Gambar</th><th>Lokasi/Penemuan/Peran/Layanan</th><th>Detail</th></tr>";
foreach ($data as $item) {
    echo "<tr>";
    echo "<td>" . $item['kategori'] . "</td>";
    echo "<td>" . $item['nama'] . "</td>";
    echo "<td>" . $item['deskripsi'] . "</td>";
    echo "<td><img src='" . $item['gambar'] . "' width='100'></td>"; // Asumsi path gambar benar
    if(isset($item['lokasi'])){
        echo "<td>" . $item['lokasi'] . "</td>";
    }elseif(isset($item['penemuan'])){
        echo "<td>" . $item['penemuan'] . "</td>";
    }elseif(isset($item['peran'])){
        echo "<td>" . $item['peran'] . "</td>";
    }elseif(isset($item['layanan'])){
        echo "<td>" . $item['layanan'] . "</td>";
    }else{
        echo "<td></td>";
    }
    echo "<td>" . $item['detail'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
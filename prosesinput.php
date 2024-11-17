<?php
include 'koneksi.php';

if (isset($_POST['submit'])) { // Memeriksa apakah tombol submit telah ditekan
    // Mengambil dan membersihkan data dari form
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);
    $address = mysqli_real_escape_string($koneksi, $_POST['address']);

    // Menyiapkan query SQL untuk memasukkan data
    $query = "INSERT INTO contact_me (name, email, message, address, created_at)
              VALUES ('$name', '$email', '$message', '$address', CURRENT_TIMESTAMP)";

    // Mengeksekusi query dan memeriksa apakah berhasil
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php?status=success'); // Mengalihkan ke halaman index dengan status success
        exit();
    } else {
        // Menampilkan pesan error jika query gagal
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
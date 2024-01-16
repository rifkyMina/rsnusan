<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Tambahkan CSS atau Bootstrap jika diperlukan -->
</head>
<body>

    <h2>Selamat datang,<?php echo $_SESSION['nama']; ?>/h2>

    <?php
    // Sertakan file koneksi
    include 'koneksi.php';

    // Cek apakah dokter sudah login (contoh, menggunakan session)
    session_start();
    if (isset($_SESSION['doctor_logged_in']) && $_SESSION['doctor_logged_in'] == true) {
        // Dokter sudah login
        $doctor_id = $_SESSION['doctor_id'];

        // Tambahkan fungsi dokter di sini, misalnya:
        // - Menampilkan janji temu yang dijadwalkan
        // - Melihat informasi pasien
        // - Melakukan tindakan medis, dll.

        echo "<p><a href='view_appointments.php'>Lihat Janji Temu</a></p>";
        echo "<p><a href='view_patients.php'>Lihat Informasi Pasien</a></p>";

        // Form logout
        echo "<form action='logout.php' method='post'>
                <input type='submit' value='Logout'>
              </form>";
    } else {
        // Jika dokter belum login, arahkan ke halaman login
        header("Location:login.php");
        exit();
    }

    // Tutup koneksi
    $conn->close();
    ?>

</body>
</html>
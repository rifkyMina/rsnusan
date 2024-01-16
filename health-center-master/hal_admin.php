<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tambahkan CSS atau Bootstrap jika diperlukan -->
</head>
<body>

    <h2>Admin Panel - Rumah Sakit</h2>

    <?php
    // Sertakan file koneksi
    include 'koneksi.php';

    // Cek apakah administrator sudah login (contoh, menggunakan session)
    session_start();
    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] == true) {
        // Administrator sudah login
        echo "<p>Selamat datang, Admin!</p>";

        // Tambahkan fungsi admin di sini, misalnya:
        

        // Form logout
        echo "<form action='logout.php' method='post'>
                <input type='submit' value='Logout'>
              </form>";

	}else {
        // Jika administrator belum login, arahkan ke halaman login
        header("Location:login.php");
        exit();
    }

    // Tutup koneksi
    $conn->close();
    ?>

</body>
</html>
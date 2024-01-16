<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ppl";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// menangkap data yang dikirim dari form login
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

// // Query untuk memasukkan data pengguna ke dalam tabel
$sql = "INSERT INTO `saran`(`nama`, `email`, `subject`, `pesan`) VALUES ('$nama', '$email', '$subject','$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Saran Terkirim";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
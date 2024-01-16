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
$nama = $_POST['nama'];
$email = $_POST['email'];
$telephon = $_POST['telephon'];
$password = $_POST['password'];
$level = $_POST['level'];

// // Query untuk memasukkan data pengguna ke dalam tabel
$sql = "INSERT INTO `user`(`nama`, `email`, `telephon`, `password`, `level`) VALUES ('$nama','$email','$telephon','$password','$level')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
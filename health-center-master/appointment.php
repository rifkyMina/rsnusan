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
$date = isset($_POST['date']) ? $_POST['date'] : '';
$departemen = isset($_POST['departemen']) ? $_POST['departemen'] : '';
$telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

$sql = "INSERT INTO `appointment`( `nama`, `email`, `tanggal`, `departeman`, `telepon`, `pesan`) VALUES ('$nama','$email','$date','$departemen','$telepon','$pesan')";


if ($conn->query($sql) === TRUE) {
    echo "Appointment berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
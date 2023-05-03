<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memproses data yang diinputkan
$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

// Insert data ke database
$sql = "INSERT INTO kontak (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dikirim";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

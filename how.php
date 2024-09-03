<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP Sederhana</title>
</head>
<body>
    <h2>Formulir Kontak</h2>
    <form action="proses_form.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Menampilkan data yang diterima
    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Pesan: " . nl2br($pesan) . "<br>";
    
    // Anda dapat menyimpan data ini ke database, mengirim email, atau melakukan tindakan lain
}
?>

</body>
</html>

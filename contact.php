<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $pesan = htmlspecialchars($_POST['pesan']);
  echo "<div class='success'>Terima kasih, <b>$nama</b>! Pesan Anda telah dikirim.</div>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Top Laundry</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🧺 Top Laundry</h1>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="services.html">Layanan</a></li>
        <li><a href="contact.php" class="active">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <section class="contact">
    <h2>Hubungi Kami</h2>
    <form method="POST" action="">
      <label>Nama</label>
      <input type="text" name="nama" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Pesan</label>
      <textarea name="pesan" rows="5" required></textarea>

      <button type="submit">Kirim Pesan</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Top Laundry</p>
  </footer>
</body>
</html>

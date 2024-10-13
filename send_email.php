<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "milkiainun@gmail.com";  // Masukkan alamat email yang ingin menerima pesan
    $subject = "Pesan dari Form Kontak";
    $headers = "From: " . $email;

    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script type='text/javascript'>alert('Pesan berhasil terkirim');window.location.href='https://milki.chickencode.org/';</script>";
    } else {
        echo "Pesan gagal dikirim.";
        echo "<a href='https://milki.chickencode.org/'> Kembali </a>";
    }
}
?>
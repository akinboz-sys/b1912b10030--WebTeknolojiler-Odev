<?php
// Tanımlı Kullanıcı Bilgileri
$tanimli_email = "b1912b10030@sakarya.edu.tr";
$tanimli_sifre = "b1912b10030";
$ogrenci_no = "b1912b10030";

// Sadece POST isteği ile gelindiğinde çalışır
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Güvenlik için gelen verileri temizliyoruz
    $gelen_email = htmlspecialchars(trim($_POST["email"]));
    $gelen_sifre = htmlspecialchars(trim($_POST["sifre"]));

    // 1. Sunucu Tarafı Boşluk Kontrolü
    if (empty($gelen_email) || empty($gelen_sifre)) {
        header("Location: login.html?error=empty");
        exit();
    }

    // 2. Bilgi Karşılaştırması
    if ($gelen_email === $tanimli_email && $gelen_sifre === $tanimli_sifre) {
        // Başarılı Giriş
        echo '<!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hoşgeldiniz</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body class="bg-light d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-3 text-success fw-bold">Hoşgeldiniz ' . $ogrenci_no . '</h1>
                <p class="lead mt-3">Sisteme başarıyla giriş yaptınız.</p>
                <a href="index.html" class="btn btn-primary mt-4">Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>';
    } else {
        // Hatalı Giriş - Hata parametresiyle geri yönlendirme
        header("Location: login.html?error=wrong");
        exit();
    }

} else {
    // URL'den direkt dosyaya girmeye çalışanları geri atıyoruz
    header("Location: login.html");
    exit();
}
?>
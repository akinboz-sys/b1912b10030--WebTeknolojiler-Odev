<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akın - İletişim Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navigasyon Çubuğu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Akın'ın Portfolyosu</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Mesajınız Başarıyla Alındı</h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="lead">İletişim formundan gönderdiğiniz bilgiler sunucu tarafından başarıyla işlenmiştir. Detaylar aşağıdadır:</p>
                        
                        <?php
                        // Formun POST metoduyla gönderilip gönderilmediğini kontrol ediyoruz
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            
                            // Formdan gelen verileri değişkenlere atıyoruz
                            // Eğer boş gelirse 'Belirtilmedi' yazdırıyoruz
                            $isim = isset($_POST['isim']) ? htmlspecialchars($_POST['isim']) : 'Belirtilmedi';
                            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Belirtilmedi';
                            $telefon = isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : 'Belirtilmedi';
                            $konu = isset($_POST['konu']) ? htmlspecialchars($_POST['konu']) : 'Belirtilmedi';
                            $cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : 'Belirtilmedi';

                            // Verileri düzenli bir tablo formatında ekrana yazdırıyoruz
                            echo "<table class='table table-bordered table-striped mt-3'>";
                            echo "<thead class='table-dark'><tr><th>Alan</th><th>Girilen Veri</th></tr></thead>";
                            echo "<tbody>";
                            echo "<tr><td><strong>Ad Soyad</strong></td><td>" . $isim . "</td></tr>";
                            echo "<tr><td><strong>E-Posta</strong></td><td>" . $email . "</td></tr>";
                            echo "<tr><td><strong>Telefon</strong></td><td>" . $telefon . "</td></tr>";
                            echo "<tr><td><strong>İletişim Nedeni</strong></td><td>" . $konu . "</td></tr>";
                            echo "<tr><td><strong>Cinsiyet</strong></td><td>" . $cinsiyet . "</td></tr>";
                            echo "</tbody>";
                            echo "</table>";

                        } else {
                            // Eğer dosyaya URL'den direkt girilmeye çalışılırsa hata veriyoruz
                            echo "<div class='alert alert-danger'>Hata: Bu sayfaya doğrudan erişim izniniz yok. Lütfen iletişim formunu kullanın.</div>";
                        }
                        ?>

                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-outline-secondary">Forma Geri Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container"><small>&copy; 2026 Akın | Web Teknolojileri Projesi</small></div>
    </footer>

</body>
</html>
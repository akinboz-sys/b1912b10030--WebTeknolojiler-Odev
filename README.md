# Web Teknolojileri Projesi (Bahar Dönemi)

Bu repoda Sakarya Üniversitesi Web Teknolojileri dersi için hazırladığım dönem sonu proje ödevi bulunuyor. Proje genel olarak kendi portfolyom tarzında oldu ama arka planda derste öğrendiğimz teknik zorunlulukları yerine getirmeye çalıştım.

## Kullanılan Teknolojiler

- **Arayüz:** HTML5 (Semantik etiketlere dikkat ettim), CSS ve Bootstrap
- **JS ve Form Kontrolü:** Form doğrulamalarında hem Vanilla JS (Native) hem de Vue.js framework kullandım
- **Sunucu (Backend):** PHP
- **API Entegrasyonu:** TV Maze API üzerinden canlı dizi verielrini çektim
- **Versiyon Kontrol:** Git & GitHub

## Sayfalar ve İçerikleri

1. **index.html (Hakkında):** Kendimi, projelerimi ve ilgi aalnlarımı anlattığım ana sayfa.
2. **cv.html (Özgeçmiş):** Eğitim bilgilerimin olduğu ve `<header>`, `<section>` gibi semantik taglerle kurulan sayfa.
3. **sehrim.html:** Memleketim Tokat ve Fenerbahçe'yi tanıttıgım, Bootstrap slider içeren kısım.
4. **ilgialanlarim.html:** API den dizi/film verisi çekip ekrana kart olarak basan sayfa.
5. **iletisim.html:** İçinde 2 farklı doğrulama butonu (JS ve Vue) olan detaylı iletişim formu.
6. **login.html & login.php:** Sadece öğrenci no ve mailimle giriş yapılabilen PHP kontrollü giriş sistemi.

## Nasıl Çalıştırılır?

Statik sayfalara direk tıklayıp tarayıcıda girebilirsiniz ama PHP kodlarının (iletişim formu ve login ksımının) çalışması için projeyi XAMPP/WAMP tarzı bir local sunucuda veya canlı bir hosting üzerinde çalıştırmanız gerekiyor.
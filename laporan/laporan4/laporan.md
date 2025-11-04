# Laporan Modul 4: Laravel Blade Template Engine
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Bunga Alfa Zahrah
**NIM:** 2024573010023 
**Kelas:** TI-2C  

---

## Abstrak 
- Pada modul ini, dilakukan serangkaian praktikum yang membahas konsep Blade Template Engine dan Controller pada framework Laravel 12. Praktikum ini mencakup cara meneruskan data dari controller ke view, penggunaan struktur kontrol dalam Blade, pembuatan layout dan personalisasi tampilan menggunakan Bootstrap, hingga penerapan partial views dan blade components. Melalui kegiatan ini, mahasiswa diharapkan memahami cara mengelola logika aplikasi pada controller serta menampilkan data secara dinamis menggunakan Blade di Laravel.
---

## 1. Dasar Teori
1.1 Pengertian Controller
    Controller dalam Laravel berfungsi sebagai penghubung antara Model dan View. Controller bertanggung jawab untuk menerima permintaan (request) dari pengguna, memproses data yang dibutuhkan, kemudian mengirimkan respons (response) berupa tampilan atau data ke browser.
    Pembuatan controller dapat dilakukan dengan perintah:
    php artisan make:controller NamaController

Controller biasanya digunakan untuk mengatur logika bisnis agar kode lebih terstruktur dan mudah dikelola.

1.2 Pengertian Blade

Blade adalah templating engine bawaan Laravel yang digunakan untuk mengatur tampilan HTML dengan lebih mudah dan efisien. Blade mendukung fitur seperti:

Inheritance dan components, memungkinkan pembuatan layout dasar yang bisa diwariskan oleh tampilan lain.
Struktur kontrol sederhana, seperti @if, @foreach, @include, dan lain-lain.

Kecepatan tinggi, karena Blade dikompilasi menjadi PHP murni.

Blade memungkinkan pengembang menulis tampilan yang lebih rapi, efisien, dan mudah dipelihara.

1.3 Konsep Layout dan Komponen

Layout digunakan untuk membuat struktur tampilan yang konsisten di seluruh halaman, seperti header, footer, dan sidebar.
Sedangkan components dan partials membantu pemisahan bagian kode tampilan agar lebih modular dan dapat digunakan kembali.


---

## 2. Langkah-Langkah Praktikum

2.1 Praktikum 1 – Meneruskan Data dari Controller ke Blade View

- Buat proyek laravel dengan perintah Laravel new modul-4-blade-view, kemudian masuk ke proyek dengan perintah cd modul-4-blade-view. 

- Buat Controller untuk menangani route dan logika, dengan perintah php artisan make:controller DasarBladeController.

- Tambahkan route pada routes/web.php.
    Editkan di routes/web.php menjadi seperti pada gambar berikut.
    <img src="../gambar/web.php-modul4-blade.png"> 

- Buat Metode untuk menghandle data pada Controller
Buka app/Http/Controllers/DasarBladeController.php dan tambahkan metode berikut:
<img src="../gambar/DasarBlade-modul4-blade.png">

- Buat Blade View
Buat file baru di resources/views/dasar.blade.php:
<img src="../gambar/dasar.blade.php.png">

- Jalankan aplikasi dan tunjukkan hasil di browser.
    http://127.0.0.1:8000/dasar
    <img src="../gambar/modul4-blade-view1.png">

2.2 Praktikum 2 – Menggunakan Struktur Kontrol Blade

-  Buat Controller baru
Di dalam project modul-4-blade-view buatlah sebuah controller baru: php artisan make:controller LogicController
Ini membuat app/Http/Controllers/LogicController.php

- Tambahkan route baru dalam web.php.
    Editkan di routes/web.php menjadi seperti pada gambar berikut.
    <img src="../gambar/web.php-modul4-2.png">
    
- Tambahkan Logika di Controller.
    Sekarang kita akan menambahkan logika ke metode show. Edit app/Http/Controllers/LogicController.php:
    <img src="../gambar/LogicCtrl.png">

- Buat Blade View.
    Buat file view di resources/views/logic.blade.php:
    <img src="../gambar/logic1.png">
    <img src="../gambar/logic2.png">

- Jalankan aplikasi 
    http://127.0.0.1:8000/logic
    <img src="../gambar/modul4-blade-view2.png">
    
---

2.3 Praktikum 3 – Layout dan Personalisasi di Laravel 12 dengan Bootstrap

- Buat Controller baru dengan perintah : php artisan make:controller PageController. 
    Anda akan menemukan controller baru di app/Http/Controllers/PageController.php.

- Menambahkan Route
    Buka routes/web.php dan tambahkan rute baru:
    <img src="../gambar/web.php-modul4-2.png">

- Update Controller
    Di app/Http/Controllers/PageController.php isikan kode berikut:
    <img src="../gambar/PageCtrl.png">

- Buat Layout Dasar dengan Bootstrap
    Kemudian, buat resources/views/layouts/app.blade.php dan isikan kode berikut:
    <img src="../gambar/app.blade1.png">
    <img src="../gambar/app-blade2.png">

- Buat view untuk Admin
    Buat direktori admin di resources/views jika belum ada. Kemudian, buat resources/views/admin/dashboard.blade.php:
    <img src="../gambar/dashboard-m4.png">

- Buat view untuk User
    Buat direktori user di resources/views jika belum ada. Kemudian, buat resources/views/user/dashboard.blade.php:
    <img src="../gambar/dashboard-user.png">

- Jalankan aplikasi 
    http://127.0.0.1:8000/admin
    Output:<img src="../gambar/modul4-blade-view3.png">
    http://127.0.0.1:8000/user
     Output:<img src="../gambar/modul4-blade-view4.png">

2.4 Praktikum 4 - Partial Views, Blade Components, dan Theme Switching di Laravel 12 

- Buat proyek laravel dengan perintah Laravel new modul-4-blade-ui, kemudian masuk ke proyek dengan perintah cd modul-4-blade-ui.

- Buat controller untuk menangani semua rute dan logika: php artisan make:controller UIController. 

- Buka routes/web.php dan tambahkan:
    <img src="../gambar/web.php-modul4-Ui.png">

- Update Controller
    Edit app/Http/Controllers/UIController.php:
    <img src="../gambar/UICtrl.png">

- Buat Layout Utama dengan Theme Support
    Buat direktori layouts di resources/views jika belum ada. Kemudian buat resources/views/layouts/app.blade.php:
    <img src="../gambar/app.blade.ui.png">

- Buat Partial Views
    Buat direktori partials di resources/views dan buat file berikut:
    - resources/views/partials/navigation.blade.php:
    <img src="../gambar/navigation.blade.ui.png">
    - Selanjutnya, buatkan sebuah file resources/views/partials/alert.blade.php:
    <img src="../gambar/alert.blade.ui.png">

- Buat Blade Components
    php artisan make:component Footer
    php artisan make:component FeatureCard
    php artisan make:component TeamMember
    php artisan make:component ContactForm

- Kemudian, Edit resources/views/components/footer.blade.php:
    <img src="../gambar/footer.blade.ui.png">

- Kemudian, Edit resources/views/components/feature-card.blade.php:
    <img src="../gambar/feature.blade.ui.png">

- Selanjutnya, Edit resources/views/components/team-member.blade.php:
    <img src="../gambar/team.member.ui.png">

- Buat Main Views
    Buat view-view utama:
    - resources/views/home.blade.php
    - resources/views/about.blade.php
    - resources/views/partials/team-stats.blade.php
    - resources/views/contact.blade.php
    - resources/views/components/contact-form.blade.php
    - resources/views/profile.blade.php

- Jalankan dan Test Aplikasi
    - Home: http://127.0.0.1:8000
    <img src="../gambar/modul4-ui.1.png">

    - About: http://127.0.0.1:8000/about
    <img src="../gambar/modul4-ui.2.png">

    - Contact: http://127.0.0.1:8000/contact
    <img src="../gambar/modul4-ui.3.png">

    - Profile: http://127.0.0.1:8000/profile
    <img src="../gambar/modul4-ui.4.png">

---

## 3. Hasil dan Pembahasan
Dari hasil praktikum yang dilakukan, diperoleh hasil sebagai berikut:

- Praktikum 1: Berhasil meneruskan berbagai jenis data dari controller ke view menggunakan Blade. Data yang dikirim berhasil ditampilkan dengan sintaks {{ }} di file .blade.php.

- Praktikum 2: Berhasil menerapkan struktur kontrol seperti @if, @foreach, dan @isset untuk menampilkan data secara kondisional di Blade.

- Praktikum 3: Telah dibuat layout dasar dengan Bootstrap, sehingga tampilan antar halaman menjadi konsisten dan responsif.

- Praktikum 4: Berhasil membuat partial views dan blade components yang modular, serta mengimplementasikan theme switching agar tampilan dapat disesuaikan dengan preferensi pengguna.

Secara keseluruhan, aplikasi berjalan dengan baik di semua endpoint (/dasar, /logic, /admin, /user, /about, /contact, /profile). Hasil tampilan di browser menunjukkan integrasi antara controller, view, dan Blade berjalan dengan benar.
 
---

## 4. Kesimpulan
Dari praktikum ini dapat disimpulkan bahwa:

- Controller berperan penting dalam mengatur alur logika aplikasi dan menjadi penghubung antara model dan view.

- Blade Template Engine mempermudah pembuatan tampilan dinamis yang bersih dan mudah dipelihara.

- Penerapan layout, partial views, dan components meningkatkan modularitas dan efisiensi pengembangan antarmuka web.

- Penggunaan Bootstrap membantu dalam pembuatan tampilan yang lebih modern, responsif, dan konsisten.

- Praktikum ini membantu memahami konsep MVC (Model-View-Controller) secara lebih mendalam di framework Laravel.
---

## 5. Referensi
- https://laravel.com/docs/12.x 
- https://laravel-news.com/blade
- https://getbootstrap.com/
---

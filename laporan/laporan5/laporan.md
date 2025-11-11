# Laporan Modul 6: Model dan Laravel Eloquent
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Bunga Alfa Zahrah
**NIM:** 2024573010023 
**Kelas:** TI-2C  

---

## Abstrak 
- Pada praktikum ini, dipelajari bagaimana cara membuat dan mengelola form (form submission) di framework Laravel 12, termasuk cara memproses input pengguna, melakukan validasi data, menampilkan pesan kesalahan (error message), serta mengimplementasikan multi-step form menggunakan session. Melalui praktikum ini, mahasiswa diharapkan dapat memahami alur request–response pada Laravel dan mampu membangun form dinamis yang aman dan interaktif.
---

## 1. Dasar Teori
- Form submission merupakan proses pengiriman data dari pengguna melalui antarmuka web ke server untuk diproses. Dalam Laravel, pengelolaan form menjadi lebih mudah melalui fitur seperti:

- Routing – Mengarahkan request dari browser ke controller.

- Controller – Menangani logika bisnis, memproses data input, dan mengembalikan response ke view.

- Blade Template – Digunakan untuk membangun tampilan form dan menampilkan pesan validasi.

- Validation – Fitur bawaan Laravel untuk memeriksa keabsahan data yang dikirim pengguna sebelum disimpan atau diproses lebih lanjut.

- Session – Menyimpan data sementara antar halaman, terutama digunakan dalam multi-step form.

Dengan kombinasi konsep-konsep tersebut, Laravel memudahkan pembuatan form yang aman, rapi, dan terstruktur.

---

## 2. Langkah-Langkah Praktikum

2.1 Praktikum 1 – Menggunakan Model untuk Binding Form dan Display

- Buat proyek laravel dengan perintah Laravel new model-app, kemudian masuk ke proyek dengan perintah cd model-app. 

- Membuat Model Data Sederhana (POCO)
    Buat folder ViewModels di dalam direktori app untuk menyimpan kelas model kita:
    <img src="../gambar/web.php.form-app.png"> 

- Buat Controller untuk menangani logika form, dengan perintah php artisan make:controller FormController. 
    Ini akan membuat file controller baru di app/Http/Controllers/FormController.php. Buka file ini dan tambahkan metode berikut : 
    <img src="../gambar/FormCtrl-form-app.png">

- Buat Metode untuk menghandle data pada Controller
    Buka app/Http/Controllers/DasarBladeController.php dan tambahkan metode berikut:
    <img src="../gambar/DasarBlade-modul4-blade.png">

- Buat View Form
    Buat file view Blade baru untuk form. Buat direktori bernama form di dalam resources/views dan buat file bernama form.blade.php di dalamnya.
    <img src="../gambar/form.blade-form-app.png">

- Buat View Hasil
    Buat file view Blade baru untuk menampilkan hasil. Buat file bernama result.blade.php di dalam direktori resources/views dan isikan kode berikut:
    <img src="../gambar/result.blade-form-app.png">

- Jalankan aplikasi dan tunjukkan hasil di browser.
    http://127.0.0.1:8000/form
    <img src="../gambar/output-form-app1.png">

2.2 Praktikum 2 – Validasi Kustom dan Pesan Error di Laravel 12

- Mendifiniskan Route
    Buka project praktikum 1 sebelumnya, kemudian tambahkan route baru berikut:
    <img src="../gambar/web.php.form-app.png">

-  Buat Controller baru
    Di dalam project form-app buatlah sebuah controller baru: php artisan make:controller RegisterController
    Ini membuat app/Http/Controllers/RegisterController.php
    <img src="../gambar/RegisterCtrl.png">

- Buat Blade View.
    Buat file view di resources/views/register.blade.php:
    <img src="../gambar/register.blade-form-app.png">

- Jalankan aplikasi 
    http://127.0.0.1:8000/logic
    <img src="../gambar/output-form-app2.png">
    
---

2.3 Praktikum 3 – Multi-Step Form Submission dengan Session Data

- Buat proyek laravel dengan perintah Laravel new multistep-form-app, kemudian masuk ke proyek dengan perintah cd multistep-form-app. 

- Buat Layout Dasar
    Buat file layout di resources/views/layouts/app.blade.php : 
    <img src="../gambar/app.blade-multi-form-app.png">

- Buat Routes
    Buka file routes/web.php dan definisikan routes untuk setiap langkah form:
    <img src="../gambar/web.php-multi-form-app.png">

- Buat Controller
    Buat Controller untuk menangani logika multi-step form,
    dengan perintah php artisan make:controller MultiStepFormController, dan buka file app/Http/Controllers/MultiStepFormController.php dan tambahkan metode berikut :
    <img src="../gambar/MultiStepCtrl.png">

- Buat view untuk Setiap Step
    Buat direktori resources/views/multistep 
        - Step 1- Informasi Pribadi : resources/views/multistep/step1.blade.php 
        <img src="../gambar/Step1.blade.png">
        - Step 2- Informasi Pendidikan : resources/views/multistep/step2.blade.php
        <img src="../gambar/Step2.blade.png">
        - Step 3- Pengalaman Kerja : resources/views/multistep/step3.blade.php
        <img src="../gambar/Step3.blade.png">
        - Summary : resources/views/multistep/summary.blade.php
        <img src="../gambar/summary.blade.png">
        - Complete : resources/views/multistep/complete.blade.php
        <img src="../gambar/complete.png">

- Jalankan aplikasi 
    http://127.0.0.1:8000/multistep
    Output:<img src="../gambar/output-multistep1.png">
           <img src="../gambar/output-multistep2.png">
           <img src="../gambar/output-multistep3.png">
           <img src="../gambar/output-multistep4.png">

---

## 3. Hasil dan Pembahasan
Dari hasil praktikum yang dilakukan, diperoleh hasil sebagai berikut:

- Pada Praktikum 1, form berhasil mengirim data dari view ke controller dan menampilkannya kembali melalui view hasil.

- Pada Praktikum 2, validasi berhasil dijalankan. Ketika data yang dimasukkan tidak sesuai, Laravel menampilkan pesan error secara otomatis.

- Pada Praktikum 3, multi-step form berjalan dengan baik menggunakan session, memungkinkan pengguna melanjutkan form ke langkah berikutnya tanpa kehilangan data sebelumnya.

Hal ini menunjukkan bahwa Laravel menyediakan sistem validasi dan manajemen data form yang efisien, serta memudahkan developer membangun form dinamis yang terstruktur dengan baik.
 
---

## 4. Kesimpulan
Dari praktikum ini dapat disimpulkan bahwa:

- Laravel menyediakan mekanisme request–response handling yang sederhana namun kuat untuk menangani input pengguna.

- Fitur validasi Laravel membantu memastikan keamanan dan keabsahan data sebelum diproses lebih lanjut.

- Dengan penggunaan session, developer dapat membangun form bertahap (multi-step form) tanpa kehilangan data antar halaman.

- Implementasi form di Laravel dapat meningkatkan efisiensi dan kualitas aplikasi web yang melibatkan interaksi pengguna.
---

## 5. Referensi
- https://www.youtube.com/watch?v=MFh0Fd7BsjE
- https://www.codepolitan.com/tutorial/laravel-form-validation
- https://www.petanikode.com/laravel-pemula/
---
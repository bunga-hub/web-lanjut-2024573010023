# Laporan Modul 6: Model dan Laravel Eloquent

**Mata Kuliah:** Workshop Web Lanjut  
**Nama:** Bunga Alfa Zahrah
**NIM:** 2024573010023
**Kelas:** TI-2C

---

## Abstrak

- Pada praktikum ini, dilakukan implementasi konsep Model dan Laravel Eloquent dalam membangun aplikasi berbasis web menggunakan framework Laravel. Model berfungsi sebagai representasi data dari database, sementara Eloquent ORM (Object Relational Mapping) memudahkan interaksi antara aplikasi dengan database melalui sintaks yang lebih sederhana dan berorientasi objek.
- Praktikum ini terdiri dari tiga bagian, yaitu penggunaan model sederhana untuk binding data pada form, penerapan DTO (Data Transfer Object) untuk memisahkan logika bisnis, serta implementasi Eloquent ORM untuk membangun aplikasi Todo List sederhana dengan MySQL.

---

## 1. Dasar Teori

1.1 Pengertian Model

Model merupakan bagian dari arsitektur MVC (Model-View-Controller) yang bertugas mengelola data dan berinteraksi langsung dengan database. Model juga dapat digunakan untuk mengatur logika bisnis yang berkaitan dengan data.

1.2 Laravel Eloquent ORM

Eloquent ORM adalah fitur bawaan Laravel yang menyediakan cara berinteraksi dengan database menggunakan pendekatan Object-Oriented. Setiap tabel database direpresentasikan oleh satu model, dan setiap record di tabel tersebut direpresentasikan sebagai objek.

1.3 DTO (Data Transfer Object)

DTO adalah objek sederhana yang digunakan untuk membawa data antara lapisan aplikasi tanpa mengandung logika bisnis. Penggunaan DTO membantu memisahkan data mentah dari proses bisnis, membuat kode menjadi lebih terstruktur dan mudah diuji.

1.4 Seeder dan Migration

Migration digunakan untuk membangun struktur tabel database secara otomatis melalui kode PHP, sedangkan Seeder digunakan untuk mengisi data awal (dummy data) ke dalam tabel database untuk keperluan pengujian.
---

## 2. Langkah-Langkah Praktikum

2.1 Praktikum 1 – Menggunakan Model untuk Binding Form dan Display

- Buat proyek laravel dengan perintah Laravel new model-app, kemudian masuk ke proyek dengan perintah cd model-app. 

- Membuat Model Data Sederhana (POCO)
    Buat folder ViewModels di dalam direktori app untuk menyimpan kelas model kita: mkdir app/ViewModels.

- Buat ProductViewModel.php di dalam direktori app/ViewModels. Berikut   kode untuk kelas model:
<img src="../gambar/ProductViewModel.png">

- Buat Controller
  Buat controller dengan perintah berikut:
  php artisan make:controller ProductController

- Edit file : app/Http/Controllers/ProductController.php :
  <img src="../gambar/ProductCtrl.png">

- Definisikan Rute 
  edit routes/web.php : 
  <img src="../gambar/web.php.model-app.png">

- Buat tampilan views 
  mkdir resources/views/product

- Kemudian buat dua file : create.blade.php dan result.blade.php
  - create.blade.php <img src="../gambar/create.blade-model-app.png">
  - result.blade.php <img src="../gambar/image.png">

- Jalankan aplikasi dan tunjukkan hasil di browser.
  http://127.0.0.1:8000/product/create
  <img src="../gambar/image copy.png">

  2.2 Praktikum 2 – Menggunakan DTO (Data Transfer Object)

- Buat proyek laravel dengan perintah Laravel new dto-app, kemudian masuk ke proyek dengan perintah cd dto-app. 

- Buka kelas DTO. Buat folder DTO di dalam app
  mkdir app/DTO

- Buat file app/DTO/ProductDTO isi dengan:
  <img src="../gambar/image copy 2.png">

- Buat service layer untuk menangani logika bisnis. DTO sebagai input di kembalikan data yang telah di format buat folder services 
  mkdir app/Services

- Buat file app/Services/ProductServices.php isi dengan 
  <img src="../gambar/image copy 3.png">
  ini untuk memproses data dari DTO mengembalikannya ke format terstruktur 

- Buat controller dengan perintah = php artisan make:controller ProductController 

- Edit app/Http/Controllers/ProductController.php
  <img src="../gambar/image copy 4.png">

- Definisikan Rute. Rute pertama tampilkan formulir, rute kedua menangani pengiriman dan hasil edit routes/web.php
  <img src="../gambar/image copy 5.png">

- Buat tampilan (Views) dengan Bootstrap buat product di dalam resources/views
  mkdir resources/views/product

- Setelah membuat direktori, buat dua file: create.blade.php dan result.blade.php.

Berikut adalah konten dari masing-masing file:

Tampilan 1: resources/views/product/create.blade.php:
<img src="../gambar/image copy 6.png">
Tampilan 2: resources/views/product/result.blade.php:
<img src="../gambar/image copy 7.png">

- Jalankan aplikasi
  http://127.0.0.1:8000/product/create
  <img src="../gambar/image copy 8.png">
  <img src="../gambar/image copy 9.png">

---

2.3 Praktikum 3 – Membangun Aplikasi Web Todo Sederhana dengan Laravel 12, Eloquent ORM, dan MySQL

- Buat proyek laravel baru dengan perintah di terminal: 
  bash
  laravel new todo-app-mysql
  masuk ke  proyek dengan = cd todo-app-mysql

- Buat database di MySQL phpmyadmin dengan perintah CREATE DATABASE tododb; atau tododb
- Instal dependency MySQL dengan 
  gitbash
  composer require doctrine/dbal
 
- Edit file .env
  edit di bagian DB_DATABASE : sesuaikan dengan nama database yang sudah kita create di phpmyadmin
- Bersihkkan config cache dengan gitbash
  php artisan config:clear

- Buat Migration untuk Tabel todos
  php artisan make:migration create_todos_table

- Buka file yang dihasilkan di database/migrations/   YYYY_MM_DD_create_todos_table.php dan perbarui:
  <img src="../gambar/image copy 10.png">

- Jalankan migrasi 
  php artisan migrate 

- Buat Seeder untuk Data Dummy 
  php artisan make:seeder TodoSeeder
  Ini akan membuat file seeder baru di direktori database/seeders. Buka file yang dihasilkan di database/seeders/TodoSeeder.php dan perbarui:
  <img src="../gambar/image copy 11.png">

- Jalankan seeder untuk mengisi database: php artisan db:seed --class=TodoSeeder

-  Buat Model Todo
Kita akan membuat model untuk tabel todos untuk berinteraksi dengannya menggunakan Eloquent ORM.
Jalankan: php artisan make:model Todo

- Buka file yang dihasilkan di app/Models/Todo.php dan perbarui:
  <img src="../gambar/image copy 12.png">

-  Buat TodoController untuk Operasi CRUD : php artisan make:controller TodoController

- Perintah diatas akan membuat file controller baru di direktori app/Http/Controllers. Buka file yang dihasilkan di app/Http/Controllers/TodoController.php dan perbarui:
<img src="../gambar/image copy 13.png">

- Edit routes/web.php: <img src="../gambar/image copy 14.png">

- Buat Tampilan Blade dengan Bootstrap
  - Tampilan Layout
  Buat folder layouts di resources/views dan buat file baru resources/views/layouts/app.blade.php. File ini akan berfungsi sebagai template dasar untuk semua tampilan:
  <img src="../gambar/image copy 15.png">

  - Halaman Todo
  Sekarang kita akan membuat tampilan untuk aplikasi Todo. Buat folder baru todos di resources/views dan buat file-file berikut:
    - index.blade.php
    - create.blade.php
    - edit.blade.php
    - show.blade.php

    - Edit file resources/views/todos/index.blade.php. Tampilan ini akan menampilkan daftar todo termasuk tautan untuk membuat, mengedit, memperbarui, dan menghapus todo.
    Tambahkan kode berikut: <img src="../gambar/image copy 16.png">
    Tampilan ini menampilkan formulir untuk menambah todo baru.

  - Edit file resources/views/todos/create.blade.php dan tambahkan kode berikut:
  <img src="../gambar/image copy 17.png">
  Tampilan ini menampilkan formulir untuk mengedit todo yang sudah ada.

  - Edit file resources/views/todos/edit.blade.php dan tambahkan kode berikut:
  <img src="../gambar/image copy 18.png">

  - Terakhir, edit file resources/views/todos/show.blade.php dan tambahkan kode berikut:
  <img src="../gambar/image copy 19.png">

- Jalankan aplikasi
  http://127.0.0.1:8000
  <img src="../gambar/image copy 20.png">
  <img src="../gambar/image copy 21.png">
  <img src="../gambar/image copy 22.png">
  <img src="../gambar/image copy 23.png">
  <img src="../gambar/image copy 24.png">
  <img src="../gambar/image copy 25.png">

---

## 3. Hasil dan Pembahasan

Dari hasil praktikum yang dilakukan, diperoleh hasil sebagai berikut:

- Praktikum 1 – Model dan Binding Form:
Penggunaan model sederhana (POCO) memungkinkan data dari form dapat ditampilkan kembali dengan mudah di view. Proses binding data menjadi lebih efisien tanpa harus melakukan manipulasi array secara manual.

- Praktikum 2 – DTO dan Service Layer:
Dengan menggunakan DTO, alur data antara view, controller, dan logic menjadi lebih rapi. DTO membantu memisahkan data dari logika bisnis yang ditangani oleh Service Layer, sehingga arsitektur aplikasi lebih modular dan mudah dikelola.

- Praktikum 3 – Aplikasi Todo dengan Eloquent dan MySQL:
Implementasi Eloquent ORM pada aplikasi Todo List membuat proses CRUD (Create, Read, Update, Delete) lebih sederhana. Developer tidak perlu menulis query SQL secara langsung, karena Eloquent sudah menyediakan fungsi-fungsi seperti all(), find(), create(), dan update() yang intuitif.

- Selain itu, dengan dukungan migration dan seeder, struktur database dapat dikelola secara konsisten antar lingkungan pengembangan. Tampilan aplikasi juga telah dibuat dengan Blade Template dan Bootstrap, menghasilkan antarmuka yang responsif dan mudah digunakan.
---

## 4. Kesimpulan

Dari praktikum ini dapat disimpulkan bahwa:

- Laravel menyediakan Eloquent ORM sebagai solusi untuk mengelola data secara efisien dan berorientasi objek.

- Penggunaan Model, DTO, dan Service Layer membantu meningkatkan keteraturan arsitektur aplikasi.

- Melalui Migration dan Seeder, pengaturan database menjadi lebih mudah, konsisten, dan otomatis.

- Penerapan konsep ini memudahkan proses pengembangan aplikasi berbasis data seperti Todo List yang memanfaatkan CRUD secara penuh.
---

## 5. Referensi

- https://hackmd.io/@mohdrzu/ryIIM1a0ll#Praktikum-2---Menggunakan-DTO-Data-Transfer-Object 

---

# Laporan Modul 1: Perkenalan Laravel

**Mata Kuliah:** Workshop Web Lanjut  
**Nama:** Bunga Alfa Zahrah  
**NIM:** 2024573010023
**Kelas:** TI-2C

---

## Abstrak

Laporan ini membahas perkenalan dasar mengenai Laravel, sebuah framework PHP modern yang banyak digunakan dalam pengembangan aplikasi web. Tujuan laporan ini adalah untuk memahami konsep dasar Laravel, struktur proyek, komponen utama, serta pola arsitektur Model-View-Controller (MVC) yang digunakan. Dengan pemahaman ini, diharapkan mahasiswa dapat lebih mudah dalam memulai proyek berbasis Laravel dan mengembangkan aplikasi web secara terstruktur, efisien, dan berkelanjutan.

---

## 1. Pendahuluan

Laravel adalah sebuah framework PHP open-source yang bertujuan menyederhanakan proses pengembangan aplikasi web dengan menyediakan berbagai fitur siap pakai, seperti pola arsitektur Model-View-Controller (MVC), sistem template Blade, Object-Relational Mapper (ORM), serta alat baris perintah Artisan. Framework ini dirancang agar agar pengembangan menjadi lebih cepat, efisien, aman, dan menyenangkan bagi pengembangan, memungkinkan mereka fokus pada logika bisnis daripada detail teknis yang rumit.

Laravel adalah framework web PHP yang populer, bersifat open-source, dan dirancang untuk membangun aplikasi web modern yang skalabel dan aman.

Karakteristik utama dari MVC adalah pola arsitektur yang memisahkan aplikasi menjadi tiga komponen (Model untuk data dan logika bisnis, View untuk antarmuka pengguna, dan Controller sebagai perantara), sehingga menghasilkan kode yang terstruktur, mudah dikelola, diuji, dan dikembangkan.

Karakteristik utama dari Opinionated merujuk pada framework yang memberikan solusi atau panduan yang sudah ditentukan untuk banyak aspek pengembangan, seringkali mempercepat pengembangan dengan pendekatan yang lebih terarah dan spesifik.

Laravel sangat cocok untuk berbagai jenis aplikasi web, mulai dari yang sederhana hingga yang kompleks dan berskala besar, termasuk aplikasi e-commerce, portal seluler, aplikasi media sosial, dan API.

---

## 2. Komponen Utama Laravel (ringkas)

- Blade (templating) <br>
  Sistem template default laravel yang memungkinkan developer membuat view dinamis dan komponen yang dapat digunakan kembali dengan sintaks yang bersih dan mudah dibaca.

- Eloquent (ORM) <br>
  Eloquent adalah sistem ORM (Object-Relational-Mapping) yang terintegrasi dengan laravel. Fitur ini memungkinkan progamer untuk berinteraksi dengan basis data menggunakan objek dan model.

- Routing <br>
  Laravel memiliki sistem routing yang kuat yang memungkinkan progamer mendefinisikan rute URL dengan mudah. Kita dapat menentukan rute untuk mengarahkan permintaan HTTP ke tindakan(controller) yang sesuai. Ini memisahkan logika rute dari tindakan yang dilakukan, sehingga membuat kode lebih terstruktur dan mudah dipelihara.

- Controllers <br>
  Kelas tempat logika aplikasi berada, yang menerima permintaan dari routing, berinteraksi dengan Eloquent(jika perlu), dan kemudian mengirimkan data ke view.

- Migrations & Seeders <br>
  Migrations mengelola skema basis data dengan cara yang terstruktur, sementara Seeders menyediakan data awal untuk basis data kita saat pengembangan.

- Artisan CLI <br>
  Alat baris perintah bawaan Laravel yang berisi perintah untuk mengotomatiskan tugas-tugas umum seperti membuat controller, migrasi, dan menjalankan seeder.

- Testing (PHPUnit) <br>
  Kerangka kerja pengujian yang digunakan Laravel untuk melakukan pengujian otomatis pada aplikasi kita, yang membantu memastikan aplikasi berjalan sesuai harapan dan mencegah kesalahan.

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.

1. app <br>
   Direktori inti yang berisi hampir semua code aplikais kita, termasuk Model, Controller, Middleware, Provider, dan Command.

2. bootstrap <br>
   Di dalam folder bootstrap berisi file app.php dan cache untuk memulai aplikasi dan mengoptimalkan kinerja.

3. config <br>
   Config berisi seluruh file konfigurasi aplikasi seperti koneksi database dan layanan lainnya.

4. database <br>
   Database berisi migrasi dan <i>seed</i> untuk pengelolaan data.

5. public <br>
   Public adalah folder utama yang dapat diakses publik dan berisi aset statis seperti gambar, CSS, dan JavaScript.

6. resources <br>
   berisi aset aplikasi seperti tampilan(views) dan aset lainnya seperti CSS/JS yang belum dikompilasi,nsedangkan routes berisi definisi rute aplikasi yang menghubungkan URL dengan kode logika.

7. storage <br>
   storage digunakan untuk menyimpan cache, logs, dan file lain yang dihasilkan aplikasi.

8. tests <br>
   tests berisi file untuk pengujian aplikasi secara otomatis.

9. vendor <br>
   vendor berisi pustaka dan dependensi pihak ketiga yang di install melalui composer.

10. .editorconfig <br>
    mengatur standar gaya kode di IDE.

11. .env <br>
    menyimpan konfigurasi sensitif seperti kunci database.

12. .env example <br>
    adalah tempat untuk .env yang dibagikan.

13. .gitattributes<br>
    mendefinisikan atribut file untuk git.

14. .gitignore<br>
    mengecualikan file dan folder dari kontrol versi Git.

15. artisan<br>
    adalah antarmuka baris perintah (CLI) untuk otomatisasi tugas di Laravel.

16. composer.json<br>
    berisi dependensi PHP proyek

17. composer.lock<br>
    merekam versi dependensi yang terinstal

18. package.json<br>
    berisi dependensi proyek PHPUnit

19. phpunit.xml<br>
    adalah file konfigurasi untuk framework pengujian PHPUnit.

20. README.md<br>
    berisi dokumentasi proyek.

21. vite.config.js<br>
    adalah file konfigurasi untuk Vite, sebuah build tool front-end yang cepat.

---

## 4. Diagram MVC dan Cara kerjanya

1. Model View Controller atau yang dapat disingkat MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari:

- Model
  Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.
- View
  Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller
  Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

2.  cara kerjanya

- Proses pertama adalah view akan meminta data untuk ditampilkan dalam bentuk grafis kepada pengguna.
- Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
- Model akan mencari dan mengolah data yang diminta di dalam database
- Setelah data ditemukan dan diolah, model akan mengirimkan data tersebut kepada controller untuk ditampilkan di view.
- Controller akan mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan kepada pengguna.

<img src="../laporan1/gambar/Diagram MVC.jpg">

---

## 6. Kelebihan & Kekurangan (refleksi singkat)

1. Kelebihan Laravel

- Laravel ini sudah digunakan di seluruh dunia, jadi memungkinkan bagi pemula untuk beradaptasi dengan lebih mudah dalam projects baru.
- Forum dan dokumentasi yang banyak, sehingga kamu dapat berdiskusi jika terjadi kendala atau error.
- Memiliki dasar template yang cukup ringan.
- Kode yang dimiliki cukup rapi dibandingkan.
- Memiliki banyak Fitur yang tersedia.

2. kekurangan Laravel

- Perlu sering melakukan pembaruan kedalam versi baru, dalam waktu yang cepat juga, jika dibandingkan framework lainnya.
- Pada sedikit kasus, waktu eksekusi Laravel sedikit lebih lambat dibanding CI.
- Memiliki ukuran kode yang termasuk berat untuk suatu framework.

- Hal yang mungkin menjadi tantangan bagi pemula
  Bagi pemula, tantangan utama dalam mempelajari Laravel terletak pada banyaknya fitur bawaan yang harus dipahami sekaligus. Konsep MVC (Model, View, Controller) yang menjadi inti framework seringkali terasa membingungkan karena kode dipisahkan ke dalam struktur yang berbeda. Selain itu, penggunaan Artisan CLI menuntut pemula untuk terbiasa dengan perintah berbasis terminal, sesuatu yang mungkin belum familiar bagi sebagian mahasiswa baru

---

## 7. Referensi

-perkenalan tentang laravel : https://www.google.com/search?q=Tuliskan+teori+perkenalan+tentang+laravel&sca_esv=e023beae1a6c5125&sxsrf=AE3TifPsYMgiZxRtgInveN_tc1uE5ACE4w%3A1757572638215&ei=Hm7CaMD3DPrx4-EP36-B2AQ&ved=0ahUKEwjA_pGmjNCPAxX6-DgGHd9XAEsQ4dUDCBA&uact=5&oq=Tuliskan+teori+perkenalan+tentang+laravel&gs_lp=Egxnd3Mtd2l6LXNlcnAiKVR1bGlza2FuIHRlb3JpIHBlcmtlbmFsYW4gdGVudGFuZyBsYXJhdmVsMgcQIRigARgKSJUTUIkMWIkMcAF4AZABAJgBsQGgAbEBqgEDMC4xuAEDyAEA-AEB-AECmAICoALCAagCCsICBxAjGCcY6gLCAg0QIxiABBgnGIoFGOoCwgINECMY8AUYJxjJAhjqApgDC_EFPfZySgdx6BKSBwMxLjGgB8EDsgcDMC4xuAe2AcIHBzAuMS4wLjHIBws&sclient=gws-wiz-serp

- Blade,routing,ORM : https://www.gamelab.id/news/2706-12-fitur-laravel-framework-php-untuk-membangun-website
- phpunit.xml, README.md, vite.config.js : https://www.google.com/search?q=phpunit.xml%2Creadme.md%2C+vite.config.js+penjelasan&sca_esv=e023beae1a6c5125&sxsrf=AE3TifO3ffrnVL8FZQxn-9R_tHeXv7g0RQ%3A1757580647016&ei=Z43CaOZWvNvj4Q-nlYKIAw&ved=0ahUKEwimpoSRqtCPAxW87TgGHaeKADEQ4dUDCBA&uact=5&oq=phpunit.xml%2Creadme.md%2C+vite.config.js+penjelasan&gs_lp=Egxnd3Mtd2l6LXNlcnAiMHBocHVuaXQueG1sLHJlYWRtZS5tZCwgdml0ZS5jb25maWcuanMgcGVuamVsYXNhbjIIEAAYgAQYogQyBRAAGO8FMggQABiABBiiBDIFEAAY7wUyBRAAGO8FSJQiUIwDWOsfcAF4AJABAJgB8QGgAb0KqgEFNS41LjG4AQPIAQD4AQGYAgygAvUKwgILEAAYgAQYsAMYogTCAggQABiwAxjvBcICBBAjGCfCAgUQIRigAcICBBAhGBWYAwCIBgGQBgWSBwU1LjYuMaAH-iKyBwU0LjYuMbgH8ArCBwUwLjUuN8gHJg&sclient=gws-wiz-serp
- kelebihan dan kekurangan Laravel : https://www.gramedia.com/literasi/laravel/?srsltid=AfmBOoqAnjtP8qxxUSJ45F0FVITvnfPPSV2bzsr2-TfqJfr2jF_W4e58

---

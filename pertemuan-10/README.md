# pertemuan-10
1.  Menyalin artefak pertemuan-09 ke pertemuan-10 untuk dijadikan baseline.
2. Struktur Direktori pertemuan - 10 \ dan Persiapan Lingkungan MySQL : layanan Apache dan MySQL berjalan dan dapat diakses melalui localhost .
3. Persiapan phpMyAdmin : phpMyAdmin dapat dibuka dan menampilkan antarmuka pengelolaan basis data
MySQL.
4. Mengidentifikasi Data Formulir Kontak P10:  pada pertemuan - 10 \ index.php, kedelapan data tersebut
sesuai dengan atribut name dan jenis input yang tersedia.
5. Menentukan Data yang Akan Disimpan ke Basis Data : delapan data yang disimpan sudah cocok dengan elemen formulir pada pertemuan - 10 \index.php.
6. Menentukan Nama Basis Data dan Tabel:
Nama basis data : db_pwd_2611500004
Nama tabel : tbl_kontak_2611500004
7. Menentukan Atribut dan Tipe Data : 
No. Atribut Tipe Data Keterangan
1 nama VARCHAR(50) Menyimpan nama lengkap, maksimal 50 karakter.
2 email VARCHAR(255) Menyimpan alamat email.
3 semester TINYINT Menyimpan nomor semester.
4 tanggal DATE Menyimpan tanggal kunjungan.
5 jenis_pesan VARCHAR(20) Menyimpan jenis pesan, seperti pertanyaan atau saran.
6 minat VARCHAR(50) Menyimpan satu atau beberapa pilihan minat sebagai teks.
7 prodi VARCHAR(2) Menyimpan kode program studi, yaitu SI atau TI .
8 pesan VARCHAR(300) Menyimpan isi pesan, maksimal 300 karakter
8. Menentukan Primary Key dan AUTO_INCREMENT : Atribut id menggunakan tipe data INT dan atribut AUTO_INCREMENT : nilai id akan bertambah secara otomatis ketika data baru dimasukkan ke dalam tabel.
9. Memeriksa Rancangan Struktur Tabel :
1 id INT PRIMARY KEY , AUTO_INCREMENT
2 nama VARCHAR(50) -
3 email VARCHAR(255) -
4 semester TINYINT -
5 tanggal DATE -
6 jenis_pesan VARCHAR(20) -
7 minat VARCHAR(50) -
8 prodi VARCHAR(2) -
9 pesan VARCHAR(300) -

10. Membuka phpMyAdmin : phpMyAdmin dapat dibuka dan menampilkan antarmuka pengelolaan basis data
MySQL.
11. Membuat Basis Data db_pwd_ nim : basis data berhasil dibuat dan namanya sesuai dengan NIM masing-masing, basis data muncul.
12. Membuat Tabel tbl_kontak_ nim : Formulir tabel menampilkan nama tabel yang benar dan menyediakan
sembilan kolom untuk diisi.
13. Mengisi Struktur Sembilan Kolom : Pastikan tabel berhasil dibuat dengan sembilan kolom. Periksa nama atribut, tipe data, panjang karakter, serta ketentuan PRIMARY KEY dan AUTO_INCREMENT pada atribut id . 
14. Mengenal Perintah DDL CREATE DATABASE dan CREATE TABLE : hubungan antara perintah CREATE DATABASE , USE , dan CREATE nama basis data, nama tabel, dan sembilan atribut pada perintah SQL sesuai dengan struktur yang telah dibuat. 
15. Memeriksa Struktur Tabel dan Memperbaiki Ketidaksesuaian : hasil pemeriksaan melalui tab Structure atau perintah DESCRIBE menunjukkan sembilan atribut sesuai rancangan.
16.  Memasukkan Data Menggunakan Fasilitas Insert : data berhasil dimasukkan tanpa pesan kesalahan, DATA YANG DI KIRIM KAN MUNCUL DI BROWSE.
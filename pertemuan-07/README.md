Struktur Direktori pertemuan - 07\ dan Persiapan Lingkungan PHP : Pengujuan pada http://localhost/pwd/2611500004-PWD-TI1A-2627O/pertemuan - 07/ dengan hasil sama dengan http://localhost/pwd/2611500004-PWD-TI1A-2627O/pertemuan -06/"

event.preventDefault() : Berhasil, tidak ada galat yang ditemukan, menghalangi eksekusi submit

Menerima Data Formulir Menggunakan $_GET : Pengujian berhasil, ketika ditambahkan /?nama=Joevrell, nilai menampilkan Nama yang di terima : Joevrell. Ketika parameter dihilangkan nilai tidak tersedia, tidak ada galat yang ditemukan.

Praktik Pengiriman Formulir Menggunakan GET : menampilkan parameter 

Menyimpan Artefak Demonstrasi GET sebagai indexGet.php : Berhasil, parameter di tampilkan di http://localhost/PWD/2627O/TI1A/2611500004-PWD-TI1A-2627O/pertemuan-07/indexGet.php?nama=Joevrell&email=joevrell%40gmail.com&semester=1&tanggal=2025-01-23&jenis_pesan=pertanyaan&minat=HTML&prodi=TI&pesan=halo+halo+bandung

Mengubah formulit dari get menjadi Post : Berhasil,ketika di view souce, Method sudah berubah dari Get menjadi Post.

Menerima Data Formulir Menggunakan $_POST : Pada pengujian post parameter tidak menampilkan parameter dan langsung menampilan Nama yang di terima http://localhost/PWD/2627O/TI1A/2611500004-PWD-TI1A-2627O/pertemuan-07/index.php

Mengakses Data dari Berbagai Jenis Input Formulir : Ketika di Pengujian dengan hanya memilih satu topik minat, baik HTML maupun CSS mengenali pilihan tersebut.
pengujian tanpa memilih topik minat : validasi menampilkan pesan bahwa pengguna harus memilih minimal satu topik.

Mengamankan Keluaran HTML 
Tahap 1 menampilkan pesan kesalahan validasi: Ketika mencoba mengirim pesan Nama lengkap wajib diisi. Email wajib
diisi. Semester wajib diisi. Tanggal kunjungan wajib diisi. Jenis pesan wajib dipilih. Program
studi wajib dipilih. Pesan wajib diisi. Minat wajib dipilih minimal satu. Jenis pesan tidak
valid. Program studi tidak valid. muncul, Ketika mengirim semua menggunakan email yang tidak valid, menampilkan Email tidak valid.
Tahap 2 - Menampilkan data yang diterima melalui POST : Setelah dikirim menampilkan data yang diterima oleh peladen 
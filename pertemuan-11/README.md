# pertemuan-11
1. Menyalin artefak pertemuan-10 untuk dijadikan baseline pertemuan-11.
2. Struktur Direktori pertemuan - 11\ dan Persiapan Lingkungan MySQL : ayanan Apache dan MySQL berjalan, Aplikasi local host dapat di akses.
3. Memeriksa Ketersediaan Basis Data dan Tabel Hasil P10 : basis data db_pwd_nim dan tabel tbl_kontak_nim tersedia. Sembilan atribut tabel, yaitu id , nama, email , semester , tanggal , jenis_pesan , minat , prodi , dan pesan sama.  Data kontak dapat ditampilkan melalui tab Browse.
4. Membuat Berkas koneksi.php : koneksi.php tersedia di pertemuan-11 dan sejajar dengan index.php.
5.  Menentukan Parameter Koneksi : Nama basis data sesuai dengan yang telah dibuat pada P10 dan tidak terdapat kesalahan penulisan.
6. Menggunakan mysqli_report(MYSQLI_REPORT_OFF) : pemanggilan mysqli_report(MYSQLI_REPORT_OFF); telah ditulis setelah deklarasi parameter koneksi. 
7. Membuat Koneksi Menggunakan mysqli_connect() : parameter koneksi, pemanggilan mysqli_report() , fungsi mysqli_connect() , dan pemeriksaan kegagalan koneksi telah ditulis sesuai urutan.
8. Memeriksa dan Menguji Keberhasilan Koneksi : koneksi berhasil, halaman menampilkan pesan Koneksi ke basis data berhasil. 
9. Menguji Penanganan Kegagalan Koneksi : kondisi kegagalan koneksi dapat diamati dan pesan yang ditampilkan sesuai dengan kode. parameter $database telah dikembalikan ke nama basis data yang benar, koneksi.php menampilkan pesan kegagalan tidak lagi muncul.
10. Mengintegrasikan Koneksi pada index.php : bagian awal index.php kedua berkas dimuat menggunakan require_once() dan tidak terdapat kesalahan penulisan nama berkas.
11. Memeriksa Ketersediaan Koneksi pada Halaman Utama : index.php memuat koneksi.php sebelum bagian
kode yang membutuhkan variabel $koneksi . Pemeriksaan kegagalan koneksi tetap berada didalam koneksi.php . 
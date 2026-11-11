# pertemuan-09

Pada pertemuan 09, yang saya lakukan adalah:
1. Menyalin artefak pertemuan 08 menjadi baseline pertemuan 09 dan menguji tampilan dimana hasilnya masih sama dengan artefak Pertemuan 08
2. Membuat fungsi membersihkan untuk membatalkan eksekusi html atau javascript sebelum output dihasilkan. tanpa fungsi bersihkan(),output akan dieksekusi contohnya echo("<h1>hai disana</h1>"); membuat teks menjadi heading, dengan fungsi bersihkan(), output menjadi ("<h1>hai disana</h1>"); tanpa membuat teks menjadi heading
3. membuat file dengan nama fungsi.php, berisi fungsi bersihkan() yang dipindahkan dari index.php. pada Index.php baris fungsi diganti dengan include("fungsi.php"); setelah pengujian, hasilnya tetap saya antara penulisan fungsi bersihkan() langsung di index.php maupun setelah fungsi bersihkan() dipindahkan ke fungsi.php.
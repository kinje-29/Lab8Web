# Lab 8 WEB Database

## Membuat Koneksi Database

![Koneksi.png](img/Koneksi.png)

*  Untuk menghubungkan PHP dengan MYSQL, kita menggunakan fungsi `myssqli_connect()` dengan parameter alamat host/server, user, password, dan nama database. 

* jika koneksi gagal, variable `$conn akan bernilai ` false karna itu kita bisa mengeceknya dengan ekspresi `if`

## Membuat index.php

![index.png](img/index.png)

* Memanggil koneksi dengan `include("koneksi.php")`

![index1.png](img/index1.png)

## Membuat tambah.php

![tambah.png](img/tambah.png)

![tambah1.png](img/tambah1.png)

![tambah2.png](img/tambah2.png)

![tambah3.png](img/tambah3.png)

![tambah4.png](img/tambah4.png)

## Membuat ubah.php

![ubah.png](img/ubah.png)

![ubah1.png](img/ubah1.png)

![ubah2.png](img/ubah2.png)

![ubah3.png](img/ubah3.png)

## Membuat hapus.php

![hapus.png](img/hapus.png)



## Tampilan WEB

1. Bagian Tampilan awal

![webIndex.png](img/webIndex.png)

2. Bagian Tambah Barang

![webtambah.png](img/webtambah.png)

* Hasil Tambah Barang

![webtambah_hasil.png](img/webtambah_hasil.png)

3. Bagian Edit Barang

![webubah.png](img/webubah.png)

* Hasiil Ubah Barang

![webubah_hasil.png](img/webubah_hasil.png)

4. Bagian Hapus Barang

![webhapus.png](img/webhapus.png)

* Hasil dari hapus barang

![webhapus_hasil.png](img/webhapus_hasil.png)
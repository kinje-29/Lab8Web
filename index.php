<?php
include("koneksi.php");
// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <title>Data Barang</title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    .container {
      margin: 20px 10px;

    }

    table {
      font-family: sans-serif;
      color: #232323;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table,
    th,
    td {
      border: 1px solid #999;
      padding: 8px 20px;
      margin-left: 100px;
    }

    h1 {
      padding-bottom: 20px;
      text-align: center;
    }

    .tambah {
      margin-left: 100px;
    }

    .tambah:link,
    .tambah:visited {
      background-color: #232323;
      color: white;
      text-decoration: none;
      padding: 14px 25px;
      display: inline-block;
    }

    .tambah:hover {
      background-color: rgb(25, 35, 35);
    }

    .ubah {
      margin-right: 10px;
    }

    .ubah:link,
    .ubah:visited {
      background-color: rgb(61, 173, 45);
      color: white;
      text-decoration: none;
      padding: 14px 25px;
      display: inline-block;
    }

    .ubah:hover {
      background-color: rgb(25, 35, 35);
    }

    .hapus:link,
    .hapus:visited {
      background-color: rgb(255, 0, 0);
      color: white;
      text-decoration: none;
      padding: 14px 25px;
      display: inline-block;
    }

    .hapus:hover {
      background-color: rgb(25, 35, 35);
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Data Barang</h1>
    <a class="tambah" href="tambah.php" type="submit">Tambah Barang</a>
    <div class="main">
      <table>
        <tr>
          <th>NO</th>
          <!-- <th>ID</th> -->
          <th>Gambar</th>
          <th>Nama Barang</th>
          <th>Katagori</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
        <?php
        if ($result) :
        ?>
          <?php
          $nomor = 1;
          while ($row = mysqli_fetch_array($result)) :
          ?>
            <tr>
              <td style="text-align: center;"><?php echo $nomor++; ?></td>
              <!-- <td><?= $row['id_barang']; ?></td> -->
              <td><img src="Gambar/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>"></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['kategori']; ?></td>
              <td><?= "Rp. " . $row['harga_jual']; ?></td>
              <td><?= "Rp. " . $row['harga_beli']; ?>
              </td>
              <td><?= $row['stok']; ?></td>
              <td>
                <a class="ubah" href="ubah.php?id_barang=<?php echo $row['id_barang']; ?>">Edit</a>
                <a class="hapus" href="hapus.php?id_barang=<?php echo $row['id_barang']; ?>">Hapus</a>
              </td>

            </tr>
          <?php endwhile;
        else : ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
        <?php endif; ?>
      </table>
    </div>
  </div>
</body>

</html>
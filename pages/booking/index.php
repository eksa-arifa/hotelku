<?php
include_once "../../koneksi/conn.php";
if(!isset($_GET["id"])){
    $_GET["id"] = "1";
}

$id = $_GET["id"];

$query = mysqli_query($conn,"SELECT * FROM kamar WHERE id = '$id'");

$row = mysqli_fetch_array($query);


if(isset($_POST["kirim"])){
    $nama = $_POST["nama"];
    $nomor = $_POST["nomor"];
    $namakmr = $_POST["namakmr"];
    $jumlah = $_POST["jumlah"];
    $total = $_POST["total"];

   $q = mysqli_query($conn,"SELECT * FROM kamar WHERE id = '$id'");

   $r = mysqli_fetch_array($q);

   if($r["jumlah_tersisa"] > 0){


    $query2 = mysqli_query($conn,"INSERT INTO pemesanan VALUES (NULL, '$nama', '$nomor', '$namakmr', '$jumlah', '$total', 'Belum Dibayar')");

    $ambilid = mysqli_query($conn,"SELECT * FROM pemesanan");
    $panjang = mysqli_num_rows($ambilid);

    if($query2){
        echo "<script>alert('Pemesanan Berhasil, silakan melakukan pembayaran di kaitohotel dengan id pemesanan $panjang, berikan id tersebut kepada karyawan yang berjaga')</script>";
        // header("Location: ../../index.php");
    }
   }else{
    echo "<script>alert('Jumlah pesanan melebihi jumlah kamar tersedia...')</script>";
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | KaitoHotel</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <form class="book" action="" method="post">
        <h2>Booking</h2>
        <div class="pemberitahuan">
            ID Pemesanan anda : <?= $panjang ?>
        </div>
        <input type="text" id="hidden" value="<?= $row["harga_kamar"] ?>">
        <label for="nama">
            Masukkan Nama Anda:
        </label>
        <input type="text" id="nama" name="nama" required>
        <label for="nomor">
            Masukkan Nomor Telepon Anda:
        </label>
        <input type="number" id="nomor" name="nomor" required>
        <label for="kamar">
            Nama Kamar:
        </label>
        <input type="text" id="kamar" name="namakmr" required value="<?= $row["nama_kamar"]?>">
        <label for="jumlah">
            Lama Inap/hari:
        </label>
        <input type="number" id="jumlah" name="jumlah" required>
        <label for="total">
            Total Harga:
        </label>
        <input type="text" id="total" name="total" required>
        <button type="submit" name="kirim">Kirimkan</button>
    </form>

    <script src="../../js/script.js"></script>
</body>
</html>
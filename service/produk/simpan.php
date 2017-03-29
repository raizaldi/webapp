<?php
include "../../dbkoneksi/koneksi.php";


$nama_produk  = $_REQUEST['nama_produk'];
$keterangan   = $_REQUEST['keterangan'];
$foto_produk  = $_REQUEST['foto_produk'];

$sql = "INSERT INTO produk(nama_produk, keterangan, foto_produk) VALUES ('$nama_produk', '$keterangan', '$foto_produk')";
$result = $db->query($sql);
?>
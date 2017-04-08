<?php
include "../../dbkoneksi/koneksi.php";


$nama_produk  = $_REQUEST['name'];
$keterangan   = $_REQUEST['keterangan'];
$foto_produk  = $_REQUEST['file'];
$status       = $_REQUEST['status'];
$harga        = $_REQUEST['harga'];
 $path = '../../assets/images/' . $_FILES['file']['name'];
 move_uploaded_file($_FILES['file']['tmp_name'], $path);

$sql = "INSERT INTO produk(nama_produk, keterangan, foto_produk, status, harga) VALUES ('$nama_produk', '$keterangan', '".$_FILES['file']['name']."','$status', '$harga')";
$result = $db->query($sql);
?>
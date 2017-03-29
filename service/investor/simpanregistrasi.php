<?php
include "../../dbkoneksi/koneksi.php";

$id_investor    = uniqid();
$nama           = $_REQUEST['nama'];
$ktp            = $_REQUEST['ktp'];
$alamat         = $_REQUEST['alamat'];
$kodepos        = $_REQUEST['kodepos'];
$kontak         = $_REQUEST['kontak'];
$email          = $_REQUEST['email'];
$password       = md5($_REQUEST['password']);
$id_produk      = $_REQUEST['id_produk'];

$simpanquery = "INSERT INTO investor(id_investor, nama, ktp, alamat, kodepos, kontak, email, password) VALUES ('$id_investor', '$nama', '$ktp', '$alamat', '$kodepos', '$kontak', '$email', '$password')";
$updatequery = "INSERT INTO detail_produk(id_investor, id_produk) VALUES ('$id_investor','$id_produk')";

$result1 = $db->query($simpanquery);
$result2 = $db->query($updatequery);

?>
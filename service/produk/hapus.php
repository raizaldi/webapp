<?php
include "../../dbkoneksi/koneksi.php";

$id_produk    = $_REQUEST['id_produk'];

$sql = "DELETE FROM produk WHERE id_produk='$id_produk'";
$result = $db->query($sql);
?>
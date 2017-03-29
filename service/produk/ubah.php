<?php
include "../../dbkoneksi/koneksi.php";

$id_produk    = $_REQUEST['id_produk'];
$nama_produk  = $_REQUEST['nama_produk'];
$keterangan   = $_REQUEST['keterangan'];
$foto_produk  = $_REQUEST['foto_produk'];

$sql = "UPDATE produk SET "
        . "nama_produk='$nama_produk',"
        . "keterangan='$keterangan',"
        . "foto_produk='$foto_produk' "
        . "WHERE id_produk='$id_produk'";
$result = $db->query($sql);
?>
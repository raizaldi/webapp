<?php
include "../../dbkoneksi/koneksi.php";

$id_slider = $_REQUEST['id_slider'];
$nama = $_REQUEST['nama'];
$foto = $_REQUEST['foto'];

$sql = "UPDATE slider SET foto='$foto' ,nama='$nama' where id_slider='$id_slider'";
$result = $db->query($sql);
?>
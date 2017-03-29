<?php
include "../../dbkoneksi/koneksi.php";
$nama = $_REQUEST['nama'];
$foto = $_REQUEST['foto'];

$sql = "INSERT INTO slider(foto, nama) VALUES ('$foto', '$nama')";
$result = $db->query($sql);
?>
<?php
include "../../dbkoneksi/koneksi.php";

$id_produk = $_REQUEST['id_produk'];

$sql = "SELECT id_produk, nama_produk, keterangan, foto_produk FROM produk where id_produk='$id_produk'";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);
}
echo json_encode($data);
?>
<?php
include "../../dbkoneksi/koneksi.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM produk where id_produk = '$id'";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);
}
echo json_encode($data);
?>
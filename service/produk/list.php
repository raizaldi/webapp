<?php
include "../../dbkoneksi/koneksi.php";

$sql = "SELECT * FROM produk where status = 1";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);
}
echo json_encode($data);
?>
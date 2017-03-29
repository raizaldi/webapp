<?php
include "../../dbkoneksi/koneksi.php";

$sql = "SELECT id_slider, foto, nama FROM slider";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);
}
echo json_encode($data);
?>
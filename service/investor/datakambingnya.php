<?php
include "../../dbkoneksi/koneksi.php";

$id    =  $_REQUEST['id'];
$sql = "SELECT id_investor, bulan, tahun, isi, type FROM chart where id_investor='$id'";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);  
}
echo json_encode($data);
?>
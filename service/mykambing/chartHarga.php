<?php
session_start();

header('Content-Type: application/json');
include "../../dbkoneksi/koneksi.php";
$id = $_SESSION['id'];
$sql = "SELECT * from chart WHERE id_investor ='$id' and  type='harga'";
$result = $db->query($sql);
$isidata = array();
$databulan = array();

while($row = $result->fetch_assoc())
{
    $isi = $row['isi'];
    $bulan = $row['bulan'];    
}
    array_push($isidata, $isi);
    array_push($databulan, $bulan);
echo json_encode(array('isi'=>$isidata,'bulan'=>$databulan));
?>
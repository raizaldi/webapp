<?php
include "../../dbkoneksi/koneksi.php";

    $id    =  $_REQUEST['id'];
    $bulan = $_REQUEST['bulan'];
    $tahun = $_REQUEST['tahun'];   
    $isi   = $_REQUEST['isi'];
    $type  = $_REQUEST['type'];

$sql = "INSERT INTO chart(id_investor, bulan, tahun, isi, type) VALUES ('$id','$bulan','$tahun','$isi','$type')";
$result = $db->query($sql);

?>
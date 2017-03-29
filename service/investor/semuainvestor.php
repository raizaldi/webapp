<?php
include "../../dbkoneksi/koneksi.php";

$sql = "SELECT a.id_investor,a.nama,a.alamat,a.kodepos,a.kontak,a.email,c.nama_produk FROM investor a , detail_produk b,produk c where a.id_investor=b.id_investor and c.id_produk=b.id_produk";
$result = $db->query($sql);
$data = array();
$all = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row);  
}
echo json_encode($data);
?>
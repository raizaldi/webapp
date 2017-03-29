<?php
session_start();
include "../../dbkoneksi/koneksi.php";
$id = $_SESSION['id'];
$sql = "SELECT januari, april, juli, oktober FROM detail_produk WHERE id_investor ='$id'";
$result = $db->query($sql);
$data = array();
while($row = $result->fetch_assoc())
{
    array_push($data, $row['januari'],$row['april'],$row['juli'],$row['oktober']);
}
echo json_encode($data);
?>
<?php
include "../../dbkoneksi/koneksi.php";


$id_slider = $_REQUEST['id_slider'];

$sql = "DELETE FROM slider where id_slider = '$id_slider'";
$result = $db->query($sql);
?>
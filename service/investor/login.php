<?php

include "../../dbkoneksi/koneksi.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

if ($email == "") {
    header("Location: ../../index.php?module=Login");
} else if ($password == "") {
    header("Location: ../../index.php?module=Login");
}


$sql = "select * from investor where email='$email' and password='$password'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       $emails = $row['email']; 
       $passwords = $row['password']; 
       $nama = $row['nama'];
       $id = $row['id_investor'];
        if($email == $emails && $password == $passwords)
        {
           session_start();
           $_SESSION['email'] = $email;
           $_SESSION['password'] = $password;
           $_SESSION['nama'] = $nama;
           $_SESSION['id'] = $id;
           header("Location:../../index.php");
        }
        
    }
  
} else {
    header("Location: ../../index.php?module=Login");
}
?>
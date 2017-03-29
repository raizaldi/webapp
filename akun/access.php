<?php
include "../dbkoneksi/koneksi.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "select * from akunadmin where email='$email' and password='$password'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       $emails    = $row['email']; 
       $passwords = $row['password']; 
       $nama      = $row['nama'];
       $id        = $row['id'];
       $level     = $row['level'];
        if($email == $emails && $password == $passwords)
        {
           session_start();
           $_SESSION['level']    = $level;
           $_SESSION['email']    = $email;
           $_SESSION['password'] = $password;
           $_SESSION['nama']     = $nama;
           $_SESSION['id']       = $id;
           header("Location: index.php");
        }
        
    }
  
} else {
    header("Location:login.php");
}
?>
<?php
include "../dbkoneksi/koneksi.php";
if(isset($_POST['simpan'])){
    $id =  $_GET['id'];
    $idkambing = uniqid();
    $filename = $_FILES['gambarkambing']['name'];
    $filesize = $_FILES['gambarkambing']['size'];
    $filetmp  = $_FILES['gambarkambing']['tmp_name'];
    $filetype = $_FILES['gambarkambing']['type'];
   
    if($filesize <= 1000000000)
    {
        move_uploaded_file($filetmp,"../assets/images/". $filename);
        $sql = "INSERT INTO kambing(id_kambing, nama_kambing, id_investor) VALUES ('$idkambing','$filename','$id')";
        $updatekambing = "UPDATE detail_produk SET id_kambing='$idkambing' WHERE id_investor='$id'";
        $result1 = $db->query($sql);
        $result2 = $db->query($updatekambing);
        if($result1 && $result2){
            header("Location:?module=dashboard");
        }
    }
}
?>

<form method="POST" action="" enctype="multipart/form-data">
Upload Gambar <input type="file" name="gambarkambing"/><br/>
<input type="text" name="harga" class="form-control"  placeholder="Harga Kambing" style="width:300px"/><br/>
<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"/>
<a href="?module=dashboard" class="btn btn-danger">Cancel</a>
</form>



<script src="../Controller/RegistrasiController.js"></script>
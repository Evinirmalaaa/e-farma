<?php
    include './koneksi.php';
    
    $id_produk = $_GET['id_produk'];
    

    $sql = "DELETE FROM produk WHERE id_produk='$id_produk'";
    if($conn->query($sql) === TRUE){
         header("location:admin.php?pesan=sukses");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
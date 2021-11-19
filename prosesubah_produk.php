<?php
    include './koneksi.php';
   
    $id_produk = $_POST['id_produk'];
        
        $nama_produk = $_POST['nama_produk'];
        $harga_produk = $_POST['harga_produk'];
        $stok = $_POST['stok'];
        $image = $_POST['gambar_produk'];

    $sql = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk' , stok='$stok' , gambar_produk='$image' WHERE id_produk = '$id_produk'";
    
    if($conn->query($sql) === TRUE){
         header("location:admin.php?pesan=ubahproduk_sukses");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
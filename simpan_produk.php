<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include './koneksi.php';

    if(isset($_POST['simpan'])){
         $nama_produk = $_POST['nama_produk'];
        $harga_produk = $_POST['harga_produk'];
        $stok = $_POST['stok'];
        $image = $_FILES['gambar_produk']['name'];
        $target = "images/".basename($image);


        $sql = "INSERT INTO produk (nama_produk, harga_produk, stok, gambar_produk) VALUES('$nama_produk','$harga_produk','$stok','$image')";
        if($conn->query($sql) === TRUE){
            echo "<div class='alert alert-primary alert-success' role='alert'> <a href='tampil.php' >Kembali</a> <br> Tambah Data Sukses</div>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    header("location:admin.php");



   

    $conn->close();

?>
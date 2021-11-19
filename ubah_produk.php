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
    
    $id_produk = $_GET['id_produk'];

    $sql = ("SELECT * FROM produk WHERE id_produk = '$id_produk'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>



 <div class="container">
    
            <div class="row mt-5">
               
                <form action="prosesubah_produk.php" method="POST"> 
                    <input type="hidden" name="id_produk" value="<?php echo $result['id_produk']?>"> 
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $result['nama_produk']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="   " name="harga_produk" class="form-control" value="<?php echo $result['harga_produk']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                          
                            <input type="text" name="stok" class="form-control" value="<?php echo $result['stok']?>"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Gambar Produk</label>
                          
                            <input type="text" name="gambar_produk" value="<?php echo $result['gambar_produk']?>" class="form-control"></label>
                            <br>
                            <img src="<?php echo 'images/'.$result['gambar_produk']?>" width="100">
                        </div>       
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
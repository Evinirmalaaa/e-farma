<?php
    include './koneksi.php';
    
    $id = $_GET['id'];
    

    $sql = "DELETE FROM user WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'><h1>Hapus Data Sukses</h1></div>";
        echo '<meta http-equiv="refresh" content="0.5;URL=\'admin.php\'">';
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
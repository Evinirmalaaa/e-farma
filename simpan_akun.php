
<?php
    include './koneksi.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    

    $sql = "INSERT INTO user (nama, username, password, level) VALUES('$nama','$username','$password','$level')";
    if($conn->query($sql) === TRUE){
       header("location:akun.php?pesan=sukses");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
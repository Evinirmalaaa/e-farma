<?php
    include './koneksi.php';
   
    $username = $_POST['username'];
        
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];


    $sql = "UPDATE user SET nama='$nama', username='$username' , password='$password'  WHERE username = '$username'";
    
    if($conn->query($sql) === TRUE){
         header("location:user.php?pesan=sukses_edit");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
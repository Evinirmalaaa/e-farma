<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="sukses"){
			echo "<div class='alert-succes'>Buat Akun Berhasil !</div>";
		}
	}
	?>
	
 
	<div class="kotak_login">
		<p class="tulisan_login">Buat Akun</p>
 
		<form action="proses_register.php" method="POST">
            <label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required" id="myInput">
            <input type="checkbox" onclick="myFunction()">Show Password
            <br>
            <br>
 
			<input type="submit" class="tombol_login" value="DAFTAR">
			<br/>
			
			<br/>
			<a href="index.php" class="buat">Sudah Punya Akun? Login</a>
 
			
		</form>
		
	</div>
 
    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
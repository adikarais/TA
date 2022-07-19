<html>
<body>
	<title>FORM</title>
   <style>
        .form{
            margin: 200px auto;
            width: 60%;
            border: 5px solid goldenrod;
            padding: 40px;
            background-color: whitesmoke;    
        }
        body{
            background-image: url("foto.jpg");
        }
   </style>
	<br><br>
	<form class="form" method="post" action="simpan.php">
		<center><table><tr>
			<h1>DAFTAR</h1>
			<tr><td>NIM</td><td>:  <input type="text" name="nim" width="20"></td></tr>
			<tr><td>Nama</td><td>: <input type="text" name="nama" width="20"></td></tr>
			<tr><td>Kota</td><td>: <input type="text" name="Alamat" width="20"></td></tr>
			<tr><td>No.hp</td><td>: <input type="text" name="Nohp" width="20"></td></tr>
			<tr></tr>
			<tr><td><input type="submit" value="simpan"></td><td>
			<button><a class="button" href="http://localhost/responsi/index.php" > Home </a></button></td></tr>
		</tr></table></center>	
	</form>
</body>
</html>

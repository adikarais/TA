<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body {
		font-family: Arial;
		padding: 10px;
		background: #f1f1f1;
	}

	/* Style Menu di bagian atas */
	.topnav {
		overflow: hidden;
		background-color: #333;
	}

	/* Style Link dalam Menu */

	.topnav a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	/* Ubah warna saat kursor di atasnya */
	.topnav a:hover {
		background-color: #ddd;
		color: black;
	}

	/* Membuat dua Kolom yang tidak sama */
	/* Kolom Kiri */
	.leftkolom {
		float: left;
		width: 100%;
	}

	/* Gambar Palsu */
	.foto {
		background-image: url("foto.jpg");
		width: 100%;
		padding: auto;
	}

	.header {
		padding: 30px;
		text-align: center;
		font-size: 30px;
		color: white;
	}

	.daftar {
		padding: 30px;
		font-size: 20px;
		color: black;
	}

	/* Tambahkan Efek card pada artikel */
	.card {
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	/* Bersihkan sisa float */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
</style>
</head>
<body class="foto">
	<?php  
		$warna="#FFFFFF";
		include("hdr.html");
	?>

	<!-- Membuat menu navigasi pada raw -->
	<div class="topnav">
		<a href="http://localhost/responsi/kalkulator.php">kalkulator</a>
		<a href="http://localhost/responsi/form.php">form</a>
		<a href="http://localhost/responsi/simpan.php">history</a>
		
	</div>

	<!-- Membuat konten pada row 3 terbagi menjadi dua kolom -->
	<div class="row">
		<!-- kolom sebelah kiri berisi teks artikel -->
		<div class="centerkolom">
			<div class="card">
				<form class="form" method="post" >
					<center><table class="daftar">
					<h1>DAFTAR</h1>
					<tr><td>NIM</td><td>:  <input type="text" name="nim" width="20"></td></tr>
					<tr><td>Nama</td><td>: <input type="text" name="nama" width="20"></td></tr>
					<tr><td>Kota</td><td>: <input type="text" name="Alamat" width="20"></td></tr>
					<tr><td>No.hp</td><td>: <input type="text" name="Nohp" width="20"></td></tr>
					<tr><td><input type="submit" value="simpan">
					</td></tr>
				</table></center>	
				</form>
			</div>
			<div class="card">
			<?php
				//mengambil tanggal sistem saat ini (1 - 31)
				$hari = date("d");
				//mengambil bulan sistem saat ini (1 12)
				$bulan = date ("m");
				//mengambil tahun sistem saat ini 
				$tahun = date("Y");
				//mencari jumlah hari bulan dan tahun ini 
				$jumlahhari=date("t",mktime(0,0,0, $bulan, $hari, $tahun)); 
			?>
		
			<?php
				switch ($bulan) {
				case 1: $nmbulan = "Jan"; break;
				case 2: $nmbulan = "Feb"; break;
				case 3: $nmbulan = "Mar"; break;
				case 4: $nmbulan = "Apr"; break; 
				case 5: $nmbulan = "Mei"; break;
				case 6: $nmbulan = "Jun"; break; 
				case 7: $nmbulan = "Jul"; break;
				case 8: $nmbulan = "Agu"; break;
				case 9: $nmbulan = "Sep"; break;
				case 10: $nmbulan = "OKT"; break;
				case 11: $nmbulan = "Nop"; break; 
				case 12: $nmbulan = "Des"; break;
			}
			echo "<center><h1>$nmbulan $tahun</h1></center>"; 
			?> 
		<br>
		<table style="border:1px solid #696969" align="center" cellpadding="20"> 
			<tr bgcolor="#D3D3D3">
				<td align=center><font color="#FF0000">Min</font></td>
				<td align=center>Sen</td>
				<td align=center>Sel</td>
				<td align=center>Rab</td> 
				<td align=center>Kam</td>
				<td align=center>Jum</td>
				<td align=center>Sab</td> 
			</tr>
	<?php
	$s=date ("w", mktime (0,0,0,$bulan,1,$tahun)); 
	for ($ds=1; $ds<=$s; $ds++) 
	{
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) 
	{
		//jika minggu ke 0, maka buat baris baru 
		if (date("w",mktime (0,0,0,$bulan, $d, $tahun)) == 0)
		{
			echo "<tr>";
		}
		$warna="#000000"; // warna default

		//jika hari Minggu beri warna merah 
		if (date("1",mktime (0,0,0,$bulan, $d, $tahun)) == "Sunday") 
		{
			$warna="#696969";
		}
		//Beri warna default tanggal tiap harinya (selain hari minggu) 
		echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan, $d, $tahun))== 6) 
		{
			echo "</tr>";
		}
	}
	echo '</table>';
	include("ftr.html");
	?>
</body>
</html>
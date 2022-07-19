<?php 
include("Home.html");
	$nim=@$_POST["nim"];
	$nama=@$_POST["nama"];
	$kota=@$_POST["kota"];
	$Nohp=@$_POST["Nohp"];
	
	//simpan kedalam file
		$fileku=fopen("data.txt","a"); //buka file dengan mode archieve
		$data=$nim."; ".$nama."; ".$kota."; ".$Nohp. "\n"; //gabungkan data 
		fwrite($fileku, $data); //simpan data ke dalam file 
		fclose($fileku); //close agar terjadi write data secara fisik
	echo "<pre>";

	include("data.txt"); //panggil dan tampilkan
	echo "</pre>";
	include("ftr.html");
?>

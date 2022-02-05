<?php 
	$koneksi = mysqli_connect("localhost","root","","db_album");
				//ini struktur "server", "username","password","dbnya";
	if(mysqli_connect_errno()){
		echo "Koneksi database gagal :".mysqli_connect_errno();
	}else{
		echo "<h4><b>Berhasil</b></4>";
	}

 ?>
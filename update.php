<?php 
include 'db_connect.php';

$id = $_POST['id']; 
$title = $_POST['title']; 
$artist = $_POST['artist']; 

mysqli_query ($koneksi,"UPDATE tb_song SET title='$title', artist='$artist' WHERE 
	id='$id'"); 

header("location:index.php");
?>
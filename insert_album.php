<?php
include 'db_connect.php';

$id = $_POST ['id'];
$title = $_POST['title'];
$artist = $_POST['artist'];

mysqli_query($koneksi,"insert into tb_song(id, title, artist) 
	values ('$id', '$title','$artist')");

header("location:index.php");
?>
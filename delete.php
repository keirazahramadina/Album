<?php 
include 'db_connect.php'; 

$id = $_GET['id']; 

mysqli_query($koneksi, "delete from tb_song where id='$id'"); 

header("location:index.php");
?>
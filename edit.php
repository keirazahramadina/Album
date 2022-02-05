<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
</head>
<body>
 
    <h2>Edit Album</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
 
    <?php
    include 'db_connect.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from tb_song where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>            
                    <td>Title</td>
                         <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                    <td><input type="text" name="title" value="<?php echo $d['title'];?>"></td>
                </tr>
                <tr>
                    <td>Artist</td>
                    <td><input type="text" name="artist" value="<?php echo $d['artist'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>       
            </table>
        </form>
        <?php
        }
        ?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
</head>
<body>
    
    <a href="add.php">+ Tambah Album</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Opsi</th>
        </tr>
        <?php 
        include 'db_connect.php';
        $id = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM tb_song");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $id++; ?></td>
                <td><?php echo $d['title']; ?></td>
                <td><?php echo $d['artist']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>
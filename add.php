<!DOCTYPE html>
<html>
<head>
	<title>MY ALBUM</title>
</head>
<body>
	<h3>TAMBAH DATA ALBUM</h3>
	<form method="post" action="insert_album.php">
		<table>
			<tr>
				<td>id</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>artist</td>
				<td><input type="text" name="artist"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>
		</table>

</body>
</html>
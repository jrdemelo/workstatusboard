<!DOCTYPE html>
<html>
<head>
	<title>James Update!</title>
</head>
<body>
	<form action="update.php" method="post">
	Status: <input name="status" type="text" /><br>
	Location: <input name="loc" type="text" /><br>
	<input name="grid" type="radio" value="on" checked="" /> On-Grid
	<input name="grid" type="radio" value="off"> Off-Grid<br>
	<input name="submit" type="submit" value="Update" />
	</form>
</body>
</html>
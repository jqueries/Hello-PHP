<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Time Display</title>
</head>
<body>

<div id="container">
	<h5>The Current Time and Date:</h5>

	<div id="body">
<?php 
	echo "<h1>" . $date . "</h1>";
	echo "<h1>" . $time . "</h1>"; 
?>
	</div>
</div>

</body>
</html>
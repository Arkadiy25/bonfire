<?php
if($_GET['submit']){
	echo $_GET['name'];
	echo '<pre>';
	print_r($_GET);
	echo '</pre>';
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="#" name="myform" menhod="get">
		<label for="name">Имя:</label>
		<input type="text" name="name" id="name"/>
		<input type="submit" name="submit"/>

	</form>
</body>
</html>
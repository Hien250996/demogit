<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Add Category</title>
</head>
<body>
<a href="category.php">Category</a>
<form method="post">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><input type="text" name="content"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="text" name="image"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Add" name="submit"></td>
		</tr>
	</table>

</form>
<?php 
	if(isset($_POST["submit"])){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$image=$_POST["image"];
		$mysqli=new mysqli("localhost","root","","no3");
		$mysqli->set_charset("utf8");
		//truy vấn lấy dl
		$strQuery="INSERT INTO `category`( `title`, `content`, `image`) VALUES (\"$title\",\"$content\",\"$image\")";
		if(!($result=$mysqli->query($strQuery))){
			die("Invailid query $strQuery");
		}
		header("location:category.php");
	$mysqli->close();
	}
 ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
</head>
<body>
<a href="category_add.php">Category_Add</a>
	<?php 
		$mysqli=new mysqli("localhost","root","","no3");
		$mysqli->set_charset("utf8");
		//truy vấn lấy dl
		$strQuery="select * from category";
		if(!($result=$mysqli->query($strQuery))){
			die("Invailid query $strQuery");
		}
		?>
		<table  style="border: 1px solid #FFFFFF">
			<tr style="border: 1px solid #FFFFFF">
				<td width="100">Id</td>
				<td width="100">Title</td>
				<td width="100">Content</td>
				<td width="100">Image</td>
			</tr>
			
		</table>
		<?php 
			while ($row=$result->fetch_assoc()) {
		 ?>
		 <table  style="border: 1px solid #FFFFFF" cellpadding="0">
			<tr>
				<td width="100"><?php echo "{$row["id"]}"  ?></td>
				<td width="100"><?php  echo "{$row["title"]}"  ?></td>
				<td width="100"><?php  echo "{$row["content"]}"  ?></td>
				<td width="100"><?php  echo "{$row["image"]}"  ?></td>
			</tr>
		</table>
		<?php } ?>
		
</body>
</html>

<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `farmer` where F_ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>FARMER</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updatefarmer.php?id=<?php echo $id; ?>">
		<label>NAME</label><input type="text" value="<?php echo $row['F_NAME']; ?>" name="F_NAME">
		<label>ADDRESS</label><input type="text" value="<?php echo $row['F_ADDRESS']; ?>" name="F_ADDRESS">
        <label>CONTACT</label><input type="number" value="<?php echo $row['F_CONTACT']; ?>" name="F_CONTACT">
        <label>AGE</label><input type="number" value="<?php echo $row['F_AGE']; ?>" name="F_AGE">
		<input type="submit" name="submit">
		<a href="farmer.php">Back</a>
	</form>
</body>
<html>
<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `consumer` where C_ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>CONSUMER</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>NAME</label><input type="text" value="<?php echo $row['C_NAME']; ?>" name="C_NAME">
		<label>ADDRESS</label><input type="text" value="<?php echo $row['C_ADDRESS']; ?>" name="C_ADDRESS">
        <label>CONTACT</label><input type="number" value="<?php echo $row['C_CONTACT']; ?>" name="C_CONTACT">
        <label>AGE</label><input type="number" value="<?php echo $row['C_AGE']; ?>" name="C_AGE">
		<input type="submit" name="submit">
		<a href="consumer.php">Back</a>
	</form>
</body>
<html>
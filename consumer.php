<!DOCTYPE html>
<html>
<head>
<title>CONUSMER</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
            <label>ID</label><input type="text" name="C_ID">
			<label>NAME</label><input type="text" name="C_NAME">
            <label>ADDRESS</label><input type="text" name="C_ADDRESS">
			<label>CONTACT</label><input type="number" name="C_CONTACT">
            <label>AGE</label><input type="number" name="C_AGE">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>ADDRESS</th>
                <th>AGE</th>
                <th>CONTACT</th>
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `consumer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['C_ID']; ?></td>
							<td><?php echo $row['C_NAME']; ?></td>
                            <td><?php echo $row['C_ADDRESS']; ?></td>
                            <td><?php echo $row['C_CONTACT']; ?></td>
                            <td><?php echo $row['C_AGE']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['C_ID']; ?>">Update</a>
								<a href="delete.php?id=<?php echo $row['C_ID']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
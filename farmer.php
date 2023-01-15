<!DOCTYPE html>
<html>
<head>
<title>FARMER</title>
</head>
<body>
	<div>
		<form method="POST" action="addfarmer.php">
            <label>ID</label><input type="text" name="F_ID">
			<label>NAME</label><input type="text" name="F_NAME">
            <label>ADDRESS</label><input type="text" name="F_ADDRESS">
			<label>CONTACT</label><input type="number" name="F_CONTACT">
            <label>AGE</label><input type="number" name="F_AGE">
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
					$query=mysqli_query($conn,"select * from `farmer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['F_ID']; ?></td>
							<td><?php echo $row['F_NAME']; ?></td>
                            <td><?php echo $row['F_ADDRESS']; ?></td>
                            <td><?php echo $row['F_CONTACT']; ?></td>
                            <td><?php echo $row['F_AGE']; ?></td>
							<td>
								<a href="editfarmer.php?id=<?php echo $row['F_ID']; ?>">Update</a>
								<a href="deletefarmer.php?id=<?php echo $row['F_ID']; ?>">Delete</a>
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
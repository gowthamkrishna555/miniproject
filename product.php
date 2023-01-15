<!DOCTYPE html>
<html>
<head>
<title>PRODUCT</title>
</head>
<body>
	<div>
		<form method="POST" action="addproduct.php">
            <label>ID</label><input type="text" name="P_ID">
			<label>NAME</label><input type="text" name="P_NAME">
            <label>TYPE</label><input type="text" name="P_TYPE">
			<label>QUANTITY</label><input type="text" name="P_QTY">
            <label>PRICE</label><input type="number" name="P_PRICE">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>TYPE</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `product`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['P_ID']; ?></td>
							<td><?php echo $row['P_NAME']; ?></td>
                            <td><?php echo $row['P_TYPE']; ?></td>
                            <td><?php echo $row['P_QTY']; ?></td>
                            <td><?php echo $row['P_PRICE']; ?></td>
							<td>
								<a href="editproduct.php?id=<?php echo $row['P_ID']; ?>">Update</a>
								<a href="deleteproduct.php?id=<?php echo $row['P_ID']; ?>">Delete</a>
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
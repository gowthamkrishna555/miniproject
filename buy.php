<!DOCTYPE html>
<html>
<head>
<title>BUY</title>
</head>
<body>
	<div>
		<form method="POST" action="addbuy.php">
            <label>P_ID</label><input type="text" name="P_ID">
			<label>C_ID</label><input type="text" name="C_ID">
            <label>B_QTY</label><input type="text" name="B_QTY">
			<label>B_DATE</label><input type="date" name="B_DATE">
            
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>P_ID</th>
				<th>C_ID</th>
				<th>B_QTY</th>
                <th>B_DATE</th>
               
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `buy`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['P_ID']; ?></td>
							<td><?php echo $row['C_ID']; ?></td>
                            <td><?php echo $row['B_QTY']; ?></td>
                            <td><?php echo $row['B_DATE']; ?></td>
                           
							<td>
								<a href="editbuy.php?id=<?php echo $row['P_ID']; ?>">Update</a>
								<a href="deletebuy.php?id=<?php echo $row['P_ID']; ?>">Delete</a>
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
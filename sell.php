<!DOCTYPE html>
<html>
<head>
<title>SELL</title>
</head>
<body>
	<div>
		<form method="POST" action="addsell.php">
            <label>F_ID</label><input type="text" name="F_ID">
			<label>P_ID</label><input type="text" name="P_ID">
            <label>S_DATE</label><input type="date" name="S_DATE">
			
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>F_ID</th>
				<th>P_ID</th>
				<th>S_DATE</th>
                
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `sell`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['F_ID']; ?></td>
							<td><?php echo $row['P_ID']; ?></td>
                            <td><?php echo $row['S_DATE']; ?></td>
                           
							<td>
								<a href="editsell.php?id=<?php echo $row['F_ID']; ?>">Update</a>
								<a href="deletesell.php?id=<?php echo $row['F_ID']; ?>">Delete</a>
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
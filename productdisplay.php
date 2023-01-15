<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
    include('conn.php');

//MySQL query goes here
$sql = "SELECT  farmer.F_CONTACT,farmer.F_NAME,product.P_ID,product.P_NAME,product.P_TYPE,product.P_QTY,product.P_PRICE
FROM farmer,product,sell
WHERE sell.P_ID=product.P_ID AND farmer.F_ID=sell.F_ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>P_ID</th> 
    <th>P_NAME</th>
    <th>P_TYPE</th>
    <th>P_QTY</th>
    <th>P_PRICE</th>
    <th>F_NAME</th>
    <th>F_CONTACT</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["P_ID"]. "</td> 
        <td>" . $row["P_NAME"]. "</td> 
        <td>" . $row["P_TYPE"]. "</td> 
        <td>" . $row["P_QTY"]. "</td> 
        <td>" . $row["P_PRICE"]. "</td> 
        <td>" . $row["F_NAME"]. "</td> 
        <td>" . $row["F_CONTACT"]. "</td> 
        
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
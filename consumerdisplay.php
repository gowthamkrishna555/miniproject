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
$sql = "SELECT  consumer.C_CONTACT,consumer.C_NAME,consumer.C_ADDRESS,consumer.C_ID
FROM consumer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>CONTACT</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["C_ID"]. "</td> 
        <td>" . $row["C_NAME"]. "</td> 
        <td>" . $row["C_ADDRESS"]. "</td> 
        <td>" . $row["C_CONTACT"]. "</td> 
        
        
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
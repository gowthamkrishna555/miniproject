<?php
	include('conn.php');
 
	$P_ID=$_POST['P_ID'];
	$P_NAME=$_POST['P_NAME'];
    $P_TYPE=$_POST['P_TYPE'];
    $P_QTY=$_POST['P_QTY'];
    $P_PRICE=$_POST['P_PRICE'];

 
	mysqli_query($conn,"insert into `product` (P_ID,P_NAME,P_TYPE,P_QTY,P_PRICE) values ('$P_ID','$P_NAME','$P_TYPE','$P_QTY',' $P_PRICE')");
	header('location:product.php');
 
?>
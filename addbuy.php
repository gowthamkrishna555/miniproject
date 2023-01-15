<?php
	include('conn.php');
 
	$P_ID=$_POST['P_ID'];
	$C_ID=$_POST['C_ID'];
    $B_QTY=$_POST['B_QTY'];
    $B_DATE=$_POST['B_DATE'];
   
 
	mysqli_query($conn,"insert into `buy` (P_ID,C_ID,B_QTY,B_DATE) values ('$P_ID','$C_ID','$B_QTY','$B_DATE')");
	header('location:buy.php');
 
?>
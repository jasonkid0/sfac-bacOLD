<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['or_id'];

mysqli_query($db,"delete from tbl_online_registrations where or_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:online_inquiry.php');
?>
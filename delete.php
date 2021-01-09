<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:index.php');
  } 
$rollno=$_GET['rn'];
$query="Delete from tblproduct where id='$rollno'";
$data=mysqli_query($con, $query);
if ($data)
{
  header('Location: product1.php?message="deleted successfully"');
}
else
{
   header('Location: product1.php?message="Some thing went wrong"');
}

?>
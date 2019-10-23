<?php
 include('includes/connection.php');
 if (isset($_REQUEST['id'])) {
$id = $_REQUEST['id'];
 $query = "DELETE FROM post WHERE id = '$id'";
 $result = mysqli_query($conn, $query);
 if ($result) {
 	header('Location: postedbooks.php');
 }
 else{
 	die('data not delete from database.');
 }
}
?>
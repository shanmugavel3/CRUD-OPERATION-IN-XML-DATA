<?php
 $id = $_REQUEST['id'];
 
 $conn = mysqli_connect('localhost','root','','learn');


 $query = " DELETE FROM details WHERE id='$id'";

 $result = mysqli_query($conn,$query);

 if($result){

 header('location:./viewform.php');
 }





?>
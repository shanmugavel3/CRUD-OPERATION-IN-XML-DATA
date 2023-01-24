<?php

 $conn = mysqli_connect('localhost','root','','learn');
 $id = $_REQUEST['id'];


 $query = "SELECT *   FROM  details WHERE id= '$id'";

 $result = mysqli_query($conn,$query);



 
 

//   echo $val['name'];
//   echo $val['phone'];

//  }
 $xw = xmlwriter_open_memory();
 xmlwriter_set_indent($xw, 1);

 
 xmlwriter_start_document($xw, '1.0', 'UTF-8');
 

xmlwriter_start_element($xw, 'people');
foreach($result as $val){

  xmlwriter_start_element($xw, 'user');

xmlwriter_start_element($xw, 'id');
xmlwriter_text($xw,$val['id'] );
xmlwriter_end_element($xw); 

xmlwriter_start_element($xw, 'name');
xmlwriter_text($xw,$val['name'] );
xmlwriter_end_element($xw); 

xmlwriter_start_element($xw, 'phone');
xmlwriter_text($xw, $val['phone']);
xmlwriter_end_element($xw); 

xmlwriter_end_element($xw); 
}

xmlwriter_end_element($xw); 

xmlwriter_end_document($xw);
$data = xmlwriter_output_memory($xw);
header("Content-Type:application/xml");
echo $data;


// // 
// $encode = json_encode($array);
// echo $encode;


?>
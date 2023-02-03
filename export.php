<?php
include('config.php');
$sql="select *from students";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>Name</td><td>Email</td><td>Phone</td><td>Course</td></tr>';
while ($row=mysqli_fetch_assoc($res)) 
{ 
  $html.='<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['course'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>
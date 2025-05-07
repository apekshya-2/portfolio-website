<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"Connection successful";
}else{
    echo"No connection";
    die("connection failed:".mysqli_connect_error());
}
mysqli_select_db($con,'contact data');

$user = $_POST['user'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query = "insert into `info data`(user,email,subject,message) values ('$user','$email','$subject','$message')";

echo "$query";
if (mysqli_query($con,$query)){
    echo"New record created successfully";
}else{
    echo"error:".mysquli_error($con);
    exit($con);
}
// if($result=mysqli_query($con,"SELECT* FROM $query")){
//     echo "Returned rows are:".mysqli_num_rows($result);
//     mysqli_free_result($result);
// }else{
//     echo "error featching data:".mysqli_error($con);
// }
mysqli_close($con);
header('location:index.php');

?>
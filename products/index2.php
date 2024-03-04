<?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$id = $_GET['id'] ? $_GET['id'] : '';

if($_GET['type'] == 'newusers'){
//new user   شرطمان برای
 $id = $_get['id'] ;
$name=$_GET['name'];
$phone_number=$_GET['phone_number'];
$city=$_GET['city'];
$password=$_GET['password'];
$gender=$_GET['gender'];
mysqli_query($con,"insert into users (name, phone_number, city, password, gender) values('$name','$phone_number','$city','$password','$gender')"); 

}elseif($_GET['type'] == 'editusers'){

$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$city=$_POST['city'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$query = "update users set 

name='$name', 
phone_number='$phone_number', 
city='$city', 
password='$password', 
gender='$gender'
where id = $id
";
mysqli_query($con,$query);
header ('location:http://localhost:8080/projects/Makinn/users/listUser.php');




}
//دکمه حذف
elseif($_GET['type'] == 'deleteUser'){
  $query = "delete from users where id = $id";
  mysqli_query($con, $query);
  header ('location:http://localhost:8080/projects/Makinn/users/listUser.php');
}

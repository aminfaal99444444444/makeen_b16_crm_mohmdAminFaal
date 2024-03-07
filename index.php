<?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_GET['type'])){
if($_GET['type'] == 'newusers'){
//new user   شرطمان برای
$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$city=$_POST['city'];
$password=$_POST['password'];
$gender=$_POST['gender'];
mysqli_query($con,"insert into users (name, phone_number, city, password, gender) values('$name','$phone_number','$city','$password','$gender');"); 
}
if($_GET['type'] == 'editusers'){
  $id = $_GET['id'] ;
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

if($_GET['type'] == 'deleteUser'){
  $id = $_GET['id'] ;
   $query = "delete from users where id = $id";
  mysqli_query($con, $query);

  header ('location:http://localhost:8080/projects/Makinn/users/listUser.php');

}
}
echo 'کاربر با موفقیت ثبت شد';
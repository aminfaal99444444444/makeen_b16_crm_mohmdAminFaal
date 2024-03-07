<?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_GET['type'])){
if($_GET['type'] == 'neworder'){
//new order   شرطمان برای
$fullname=$_POST['fullname'];
$phone_number=$_POST['phone_number'];
$location=$_POST['location'];
$zman_ersal=$_POST['zman_ersal'];
mysqli_query($con,"insert into orders (fullname, phone_number, location, zman_ersal) values('$fullname','$phone_number','$location','$zman_ersal');"); 
}
if($_GET['type'] == 'editorder'){
  $id = $_GET['id'] ;
$fullname=$_POST['fullname'];
$phone_number=$_POST['phone_number'];
$location=$_POST['location'];
$zman_ersal=$_POST['zman_ersal'];
$query = "update orders set 
fullname='$fullname',
phone_number='$phone_number', 
location='$location', 
zman_ersal='$zman_ersal'
where id = $id
";

mysqli_query($con, $query);

header ('location:http://localhost:8080/projects/Makinn/orders/listorder.php');

}

if($_GET['type'] == 'deleteorder'){
  $id = $_GET['id'] ;
   $query = "delete from orders where id = $id";
  mysqli_query($con, $query);

  header ('location:http://localhost:8080/projects/Makinn/orders/listorder.php');

}
}
echo 'کاربر با موفقیت ثبت شد';

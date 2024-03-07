<?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_GET['type'])){
if($_GET['type'] == 'newProduct'){
//new user   شرطمان برای
$username=$_POST['username'];
$color=$_POST['color'];
$tozihat=$_POST['tozihat'];
$daste_bndi=$_POST['daste_bndi'];
$tedad=$_POST['tedad'];
mysqli_query($con,"insert into users (username, color , tozihat, daste_bndi, tedad) values('$username','$color','$tozihat','$daste_bndi','$tedad');"); 
}
if($_GET['type'] == 'editProducts'){
  $id = $_GET['id'] ;
$username=$_POST['username'];
$color=$_POST['color'];
$tozihat=$_POST['tozihat'];
$daste_bndi=$_POST['daste_bndi'];
$tedad=$_POST['tedad'];

$query = "update products set 

username='$username', 
color='$color',  
tozihat='$tozihat', 
daste_bndi='$daste_bndi'
tedad='$tedad'
where id = $id
";  
mysqli_query($con,$query);
header ('location:http://localhost:8080/projects/Makinn/products/listProduct.php');



}

if($_GET['type'] == 'deleteproducts'){
  $id = $_GET['id'] ;
   $query = "delete from products where id = $id";
  mysqli_query($con, $query);

  header ('location:http://localhost:8080/projects/Makinn/products/listProduct.php');
}
}
echo 'کاربر با موفقیت ثبت شد';
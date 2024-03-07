<html lang="en">
<head>
  <html lang="en">
    <html dir="rtl" lang="fa">
      <head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
  <div class="container mt-3 border-primary">
    <h2>ویرایش سفارش</h2>
    <p>لطفا اطلاعات خود را کامل وارد کنید</p>

    <form method="post" action="../index3.php?type=editorder&id=<?php echo $_GET['id'] ?>">
  <?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * from orders where id = ". $_GET['id'] ;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result)
  ?>
  
        <br>
        <div class="col">
            <input type="text" class="form-control" placeholder="نام خود را کامل وارد کنید" name="fullname"
            value="<?php echo $row['fullname']; ?>">
            <br>
          </div>
        
        <div class="col">
            <input type="password" class="form-control" placeholder="شماره تلفن همراه" name="phone_number"
            value="<?php echo $row['phone_number']; ?>">
          </div>
          <br>
          <div class="col">
            <input type="text" class="form-control" placeholder="ادرس  را وارد کنید" name="location"
            value="<?php echo $row['location']; ?>">
        </div>
        
        <label for="operator">لطفا بازه زمان ارسال را انتخاب کنید</label> <select id="operator" name="zman_ersal">
           <option value="شنبه  1 تا  3" <?php echo $row['zman_ersal'] == 'شنبه  1 تا  3' ? 'selected' : ''; ?>>شنبه  1 تا  3</option>
         <option value="یکشنبه 9 تا 12 ظهر" <?php echo $row['zman_ersal'] == 'یکشنبه 9 تا 12 ظهر' ? 'selected' : ''; ?>>یکشنبه 9 تا 12 ظهر</option> 
         <option value="دوشنبه و سه شنبه 4 تا 8 شب" <?php echo $row['zman_ersal'] == 'دوشنبه و سه شنبه 4 تا 8 شب' ? 'selected' : ''; ?>>دوشنبه و سه شنبه 4 تا 8 شب</option></select> 
      <br>
      <br>
        <button type="submit" class="btn btn-primary">ثبت</button>
      </div>
      <br>
    </div>
    
  </form>
  </div>
</body>
</html>
<html lang="en">
<head>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
    
</head>
<center>
<body>
  <div class="container mt-3 border-primary">
    <h2>ویرایش کاربر</h2>
    <p>ویرایش  کاربر</p>

    <form method="post" action="../index.php?type=editusers&id=<?php echo $_GET['id'] ?>">
  <?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * from users where id = ". $_GET['id'] ;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result)
  ?>
        <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="نام خود را وارد کنید" name="name" 
            value="<?php echo $row['name']; ?>">
            <br>
          </div>
        
        <div class="col">
            <input type="password" class="form-control" placeholder="شماره تلفن همراه" name="phone_number"
            value="<?php echo $row['phone_number']; ?>">
          </div>
          <br>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="استان خود را وارد کنید" name="city"
            value="<?php echo $row['city']; ?>">

          </div>
      
      <div class="col">
        <input type="password" class="form-control" placeholder="رمز خود را وارد کنید" name="password"
        value="<?php echo $row['password']; ?>" >
        
      </div>
      <br>
      <br>
      <br>
      <div class="mb-3">
        <label class="form-label">جنسیت:</label>
        <select class="form-control" name="gender">
          <option value="مرد" <?php echo $row['gender'] == 'مرد' ? 'selected' : ''; ?>>مرد</option>
          <option value="زن" <?php echo $row['gender'] == 'زن' ? 'selected' : ''; ?>>زن</option>
        </select>
      </div> 
    <br>
    <br>
    <button type="submit" class="btn btn-primary">ثبت</button>
  </form>
  
  <div></div>
</body>
</center>
</html>
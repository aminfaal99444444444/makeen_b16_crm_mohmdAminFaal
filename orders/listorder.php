<html lang="en">
<head>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <center> 
        <br>
        <br>
        <br>
    <div class="container mt-3">
        <h2>جدول سفارشات</h2>
                 <br>
        <table class="table">
          <thead>
            <tr>
              <th>نام کامل</th>
              <th>شماره تلفن</th>       
              <th>زمان ارسال</th>
              <th>ادرس</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * from orders";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['phone_number']; ?></td>
              <td><?php echo $row['location']; ?></td>
              <td><?php echo $row['zman_ersal']; ?></td>
              <td><button type="button" class="btn btn-success">
                <a href="editorder.php?id=<?php echo $row['id']; ?>">ویرایش </a>
              </button></td>
              <td><button type="button" class="btn btn-dark">
                <a href="../index3.php?type=deleteorder&id=<?php echo $row['id']; ?>" onclick = "return confirm('اطمینان دارید')">حذف</a></button></td>
            </tr>
            <tr>

              <?php
            }
}
?>
               
               <tr>
          </tbody>
        </table>
      </div>
      
      </center>
</body>
</html>
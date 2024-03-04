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
    <div class="container mt-3">
        <h2>جدول کاربران</h2>
                 
        <table class="table">
          <thead>
            <tr>
              <th>نام خانوادگی</th>
              <th>تلفن همراه</th>
              <th>شهر</th>
              <th>رمز</th>
              <th>جنسیت</th>
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
$sql = "SELECT * from users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['phone_number']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td><?php echo $row['gender']; ?></td>
              <td><button type="button" class="btn btn-success">
                <a href="editusers.php?id=<?php echo $row['id']; ?>">ویرایش </a>
              </button></td>
              <td><button type="button" class="btn btn-dark">
                <a href="../index.php?type=deleteUser&id=<?php echo $row['id']; ?>" onclick = "return confirm('اطمینان دارید')">حذف</a></button></td>
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
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
    <div class="container mt-3">
        <h2>جدول محصولات</h2>
                 <br>
                 <br>
        <table class="table">
          <thead>
            <tr>
              <th>نام کاربری</th>
              <th>رنگ</th>
              <th>توضیحات</th>
              <th>دسته بندی</th>
              <th>تعداد</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * from products";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
?> 
<tr>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['color']; ?></td>
              <td><?php echo $row['tozihat']; ?></td>
              <td><?php echo $row['daste_ bndi']; ?></td>
              <td><?php echo $row['tedad']; ?></td>
              <td><button type="button" class="btn btn-success">
                <a href="editProduct.php?id=<?php echo $row['id']; ?>">ویرایش</a>
              </button></td>
              <td><button type="button" class="btn btn-dark">
                <a href="../index2.php?type=deleteProducts&id=<?php echo $row['id']; ?>" onclick = "return confirm('اطمینان دارید')">حذف</a></button></td>
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
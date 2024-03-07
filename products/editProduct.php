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
    <h2> ویرایش محصول</h2>
  <form  method="post"  action="../index2.php?type=editProducts&id=<?php echo $_GET['id'] ?>">
  <?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * from products where id = ". $_GET['id'] ;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
  ?>

    <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="نام کاربری"name="username"
            value="<?php echo $row['username']; ?>">
            <br>
          </div>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="رنگ محصول" name="color"
            value="<?php echo $row['color']; ?>">
          </div>
       <br>
      <div class="col">
        <input type="text" class="form-control" placeholder="توضیحات مورد نظر را وارد کنید" name="tozihat"
        value="<?php echo $row['tozihat']; ?>">
        <br>
        <br>
      
        <label for="operator">لطفا انتخاب کنید</label> 
        <select id="operator" name="daste_bndi">
             <option value="دیجیتال" <?php echo $row['daste_bndi'] == 'دیجیتال' ? 'selected' : ''; ?>>دیجیتال</option>
          <option value="پوشاک" <?php echo $row['daste_bndi'] == 'پوشاک' ? 'selected' : ''; ?>>پوشاک</option> 
          <option value="اسباب بازی" <?php echo $row['daste_bndi'] == 'اسباب بازی' ? 'selected' : ''; ?>>اسباب بازی</option>
           <option value="زیور الات و اکسسوری" <?php echo $row['daste_bndi'] == 'زیور الات و اکسسوری' ? 'selected' : ''; ?>>زیورالات و اکسسوری</option>
        </select> 
        
        <br>
       <label for="operator">لطفا تعداد را انتخاب کنید</label> <select id="operator" name="tedad"> 
        <option value="1" <?php echo $row['tedad'] == '1' ? 'selected' : ''; ?> >1</option>
          <option value="2" <?php echo $row['tedad'] == '2' ? 'selected' : ''; ?>>2</option>
           <option value="3" <?php echo $row['tedad'] == '3' ? 'selected' : ''; ?>>3</option>
            <option value="4" <?php echo $row['tedad'] == '4' ? 'selected' : ''; ?>>4</option>
            </SElect>
        <br>
      
        <br>
    
        
        <button type="submit" class="btn btn-primary">ثبت</button>

    </div>
    
  </form>
  </div>
</body>
</html
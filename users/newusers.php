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
    <h2>افزودن کاربر</h2>
    <p>صفحه ثبت کاربر</p>
    <form method="post" action="../index.php?type=newusers">
  
        <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="نام خود را وارد کنید" name="name">
            <br>
          </div>
        
        <div class="col">
            <input type="int" class="form-control" placeholder="شماره تلفن همراه" name="phone_number">
          </div>
          <br>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="استان خود را وارد کنید" name="city">
          </div>
      
      <div class="col">
        <input type="password" class="form-control" placeholder="رمز خود را وارد کنید" name="password">
        
      </div>
      <br>
      <br>
      <br>
      <label for="operator">لطفا انتخاب کنید</label> <select id="operator" name="gender"> 
        <option value="multiply">male</option>
        <option value="divide">female</option></select>
    </div>
    <button type="submit" class="btn btn-primary">ثبت</button>
      </div>
      <br>
    </div>
    
  </form>
  </div>
  </center>
</body>
</html>
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
  <div class="container mt-3 border-primary">
    <h2>افزودن سفارش</h2>
    <p>لطفا اطلاعات خود را کامل وارد کنید</p>
    <form method="post" action="../index3.php?type=neworder">
  
        <br>
        <div class="col">
            <input type="text" class="form-control" placeholder="نام خود را کامل وارد کنید" name="fullname">
            <br>
          </div>
        
        <div class="col">
            <input type="password" class="form-control" placeholder="شماره تلفن همراه" name="phone_number">
          </div>
          <br>
          <div class="col">
            <input type="password" class="form-control" placeholder="ادرس  را وارد کنید" name="location">
        </div>
        
    
    
        
        <label for="operator">لطفا بازه زمان ارسال را انتخاب کنید</label> <select id="operator" name="zman_ersal">
           <option value="multiply">شنبه  1 تا  3</option>
         <option value="divide">یکشنبه 9 تا 12 ظهر</option> 
         <option value="divide">دوشنبه و سه شنبه 4 تا 8 شب</option>
        </select> 
      <br>
      <br>
        <button type="submit" class="btn btn-primary">ثبت</button>
      </div>
      <br>
    </div>
    
  </form>
  </div>
  </center>
</body>
</html>
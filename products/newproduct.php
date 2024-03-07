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
  <form  method="post"  action="../index2.php=newProduct"></form>
  <div class="container mt-3 border-primary">
    <h2>افزودن محصول</h2>
    <form>
        <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="نام کاربری"name="username">
            <br>
          </div>
        </div>
        <div class="col">
            <input type="password" class="form-control" placeholder="رنگ محصول" name="color">
          </div>
       
       
       
      <div class="col">
        <input type="password" class="form-control" placeholder="توضیحات مورد نظر را وارد کنید" name="tozihat">
        <br>
        <br>
      
        <label for="operator">لطفا انتخاب کنید</label> <select id="operator" name="daste_bndi"> <option value="multiply">دیجیتال</option>
          <option value="divide">پوشاک</option> <option value="divide">اسباب بازی</option> <option value="divide">زیورالات و اکسسوری</option></select> 
        
        <br>
       <label for="operator">لطفا تعداد را انتخاب کنید</label> <select id="operator" name="tedad">
         <option value="multiply">1</option>
          <option value="divide">2</option> 
          <option value="divide">3</option>
           <option value="divide">4</option>
            </SElect>
        <br>
      
        <br>
  
        <button type="submit" class="btn btn-primary">ثبت</button>

    </div>
    
  </form>
  </div>
</body>
</html
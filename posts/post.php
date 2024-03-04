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
    <h2>ایجاد مقاله</h2>
    <form>
        <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="عنوان خود را وارد کنید"name="عنوان">
            <br>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="نام نویسنده را وارد کنید" name="نویسنده">
          </div>
          <label for="operator">دسته بندی</label> <select id="operator" name="operator"> <option value="multiply">دسته بندی 1</option>
            <option value="divide">دسته بندی 2</option>  <option value="divide">دسته بندی 3</option></select> 
            <br>
            <br>
            <label for="comment"> متن مقاله:</label>
            <textarea class="form-control" rows="10" id="comment" name="مقاله"></textarea>
            <br>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">ثبت</button>
            </center>
</body>
</html>






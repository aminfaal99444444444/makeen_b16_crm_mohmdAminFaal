<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>create product</title>
</head>
<center>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users/create">محصولات+</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/orders/create">سفارشات+</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/products/create">محصولات+</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/posts/create">مقاله+</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/catgury/create">دسته بندی+</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/catgury/index">جدول دسته بندی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/index">جدول مقاله</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products/index">جدول محصولات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users/index">جدول کاربران</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/orders/index">جدول سفارشات</a>
              </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-3 border-primary">
      <h2>افزودن محصول</h2>
      <form  method="post"  action="{{route('products.create')}}">
        @csrf
          <br>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="نام کاربری"name="username">
              <br>
            </div>
          </div>
          <div class="col">
              <input type="text" class="form-control" placeholder="رنگ محصول" name="color">
            </div>



        <div class="col">
          <input type="text" class="form-control" placeholder="توضیحات مورد نظر را وارد کنید" name="tozihat">
          <br>
          <br>

          <label for="operator">لطفا انتخاب کنید</label> <select id="operator" name="daste_bndi"> <option value="دیجیتال">دیجیتال</option>
            <option value="پوشاک">پوشاک</option> <option value="اسباب بازی">اسباب بازی</option> <option value="زیور الات و اکسسوری">زیورالات و اکسسوری</option></select>

          <br>
         <label for="operator">لطفا تعداد را انتخاب کنید</label> <select id="operator" name="tedad">
           <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
             <option value="4">4</option>
              </SElect>
          <br>

          <br>

          <button type="submit" class="btn btn-primary">ثبت</button>

      </div>

    </form>
    </div>
    </center>
</body>
</html>

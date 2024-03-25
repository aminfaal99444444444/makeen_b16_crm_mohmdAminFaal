<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>catgury</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
        <h2>افزودن دسته بندی</h2>
        <form  method="post"  action="/catgury/create">
          @csrf
            <br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="دسته بندی را وارد کنید"name="daste_bndi">
                <br>
              </div>
              <br>
              <button type="submit" class="btn btn-primary">ثبت</button>
</body>
</html>

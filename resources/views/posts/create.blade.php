<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>مقاله جدید</title>
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

    <div class="container">
      <form method="post"  action="/posts/create">
        @csrf
        <h2>ثبت مقاله جدید</h2>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">عنوان:</label>
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="عنوان مقاله را وارد نمایید"
            name="title"
          />
        </div>

        <div class="mb-3 mt-3">
          <label for="phonenumber" class="form-label">نویسنده:</label>
          <input
            type="text"
            class="form-control"
            id="name"
            placeholder="نویسنده را وارد نمایید"
            name="name"
            />
            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

        </div>
<div>
        <label for="comment">:متن</label>
        <textarea class="form-control" rows="5" id="comment" placeholder="متن را وارد نمایید" name="poststext"></textarea>
        @error('poststext')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<br>

<button type="submit" class="btn btn-primary">ثبت</button>
      </form>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


  </body>
</html>

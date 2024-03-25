<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
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
    <h1>Edit Product</h1>
    <form action="/products/edit/{{ $product->id }}" method="post">
        @csrf
        <input type="string" name="username" value="{{ $product->username }}"><br>
        <input type="string" name="color" value="{{ $product->color }}"><br>
        <textarea name="tozihat" cols="30" rows="10">{{ $product->tozihat }}</textarea><br>
        <select name="daste_bndi">
            <option value="پوشاک" {{ $product->color == 'پوشاک' ? 'selected' : '' }}>پوشاک</option>
            <option value="دیجیتال" {{ $product->color == 'دیجیتال' ? 'selected' : '' }}>دیجیتال</option>
            <option value="اسباب بازی" {{ $product->color == 'اسباب بازی' ? 'selected' : '' }}>اسباب بازی</option>
            <option value="زیور الات و اکسسوری" {{ $product->color == 'زیور الات و اکسسوری' ? 'selected' : '' }}>زیور الات و اکسسوری</option>
        </select>
        <select name="tedad">
            <option value="1" {{ $product->color == '1' ? 'selected' : '' }}>1</option>
            <option value="2" {{ $product->color == '2' ? 'selected' : '' }}>2</option>
            <option value="3" {{ $product->color == '3' ? 'selected' : '' }}>3 </option>
            <option value="4" {{ $product->color == '4' ? 'selected' : '' }}>4</option>
        </select>
        <input type="submit" value="ثبت">
    </form>
</body>

</html>

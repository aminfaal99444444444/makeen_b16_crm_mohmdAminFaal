<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <center>
    <h1></h1>
    <nav class="navbar navbar-expand-sm bg-light container">
        <div class="container-fluid">
          <ul class="navbar-nav">
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
          </ul>
        </div>
      </nav>
        <div class="container mt-3">
            <h2>جدول محصولات</h2>
            <p></p>
            <table class="table table-bordered">
              <thead>

                <tr>
                  <th>ID</th>
                  <th>username</th>
                  <th>color</th>
                  <th>tozihat</th>
                  <th>daste_bndi</th>
                  <th>tedad</th>
                </tr>
              </thead>
              <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->username }}</td>
                <td>{{ $product->color }}</td>
                <td>{{ $product->tozihat }}</td>
                <td>{{ $product->daste_bndi }}</td>
                <td>{{ $product->tedad }}</td>
                <td>
                    <a href="/products/edit/{{ $product->id }}">ویرایش</a> /
                    <form action="/products/delete/{{ $product->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="حذف">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</center>
</body>

</html>


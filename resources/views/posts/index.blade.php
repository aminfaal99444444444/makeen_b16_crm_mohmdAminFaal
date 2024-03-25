<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <center>
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
    <div class="container mt-3">
        <h2>جدول مقالات</h2>
        <p></p>
        <table class="table table-bordered">
          <thead>

            <tr>
              <th>ID</th>
              <th>title</th>
              <th>name</th>
              <th>poststext</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->poststext }}</td>

                <td>
                    <a href="/posts/edit/{{ $post->id }}">ویرایش</a> /
                    <form action="/posts/delete/{{ $post->id }}" method="post">
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


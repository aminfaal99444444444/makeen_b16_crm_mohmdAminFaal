<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categury</title>
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
              </ul>
            </div>
          </nav>
    <h1>Edit catgury</h1>
    <form action="/catgury/edit/{{ $catgury->id }}" method="post">
        @csrf
        <input type="string" name="daste_bndi" value="{{ $catgury->daste_bndi }}"><br>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="ثبت">
        </center>
</body>
</html>

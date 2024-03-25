<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit users</title>
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
    <h1>Edit user</h1>
    <form action="/users/edit/{{ $user->id }}" method="post">
        @csrf
        <input type="string" name="name" value="{{ $user->name }}"><br>
        <input type="string" name="phone_number" value="{{ $user->phone_number}}"><br>
        <input type="string" name="city" value="{{ $user->city}}"><br>
        <input type="string" name="password" value="{{ $user->password}}"><br>
        <select name="gender">
            <option value="مرد" {{ $user->gender == 'مرد' ? 'selected' : '' }}>مرد</option>
            <option value="زن" {{ $user->gender == 'زن' ? 'selected' : '' }}>زن</option>
        </select>
        <input type="submit" value="ثبت">
    </form>
</body>

</html>


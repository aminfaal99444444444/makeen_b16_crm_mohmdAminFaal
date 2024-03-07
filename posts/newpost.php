<html lang="en">
<head>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light container">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\login.html">ورود</a></li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\register.html">ثبت نام</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">دسته بندی</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">مردانه</a></li>
              <li><a class="dropdown-item" href="#">Link 2</a></li>
              <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\products\list.html">محصولات</a></li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\orders\list.html">سفارشات</a></li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\users\list.html">کاربران</a></li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\posts\list.html">مجله</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <form action=".php">
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
        </div>

        <div class="mb-3 mt-3">
          <label for="address" class="form-label">تاریخ:</label>
          <input
            type="text"
            class="form-control"
            id="date"
            placeholder="تاریخ را وارد نمایید"
            name="date"
          />
        </div>

        <div class="mb-3 mt-3">
          <label for="price" class="form-label">متن:</label>
          <input
            type="text"
            class="form-control"
            id="posttext"
            placeholder="متن را وارد نمایید"
            name="posttext"
          />
        </div>

        <button type="submit" class="btn btn-light">
          <a href="list.html">ثبت</a>
        </button>
      </form>
    </div>
  </body>
</html>


</body>
</html>






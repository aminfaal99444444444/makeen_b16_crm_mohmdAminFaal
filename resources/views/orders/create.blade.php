<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<center>
<body>
    <div class="container mt-3 border-primary">
      <h2>افزودن سفارش</h2>
      <form  method="post"  action="/orders/create">
        @csrf
          <br>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="نام کاربری"name="fullname">
              <br>
            </div>
          </div>
          <div class="col">
              <input type="text" class="form-control" placeholder="رنگ محصول" name="phone_number">
            </div>



        <div class="col">
          <input type="text" class="form-control" placeholder="توضیحات مورد نظر را وارد کنید" name="location">
          <br>
          <br>

          <label for="operator">لطفا انتخاب کنید</label>
          <select id="operator" name="zman_ersal">
            <option value="شنبه 1 تا 3">شنبه 1 تا 3</option>
            <option value="یک شنبه 9 تا 12 ظهر">یک شنبه 9 تا 12 ظهر</option>
             <option value="دوشنبه و سه شنبه 4 تا 8 شب">دوشنبه و سه شنبه 4 تا 8 شب</option>
        </select>
          <br>
<br>
          <button type="submit" class="btn btn-primary">ثبت</button>

      </div>

    </form>
    </div>
    </center>
</body>
</html>

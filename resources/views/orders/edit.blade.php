<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Edit order</h1>
    <form action="/orders/edit/{{ $order->id }}" method="post">
        @csrf
        <input type="string" name="fullname" value="{{ $order->fullname }}"><br>
        <input type="string" name="phone_number" value="{{ $order->phone_number}}"><br>
        <textarea name="location" cols="30" rows="10">{{ $order->location }}</textarea><br>
        <select name="zman_ersal">
            <option value="شنبه 1 تا 3" {{ $order->zman_ersal == 'شنبه 1 تا 3' ? 'selected' : '' }}>شنبه 1 تا 3</option>
            <option value="یک شنبه 9 تا 12 ظهر" {{ $order->zman_ersal == 'یکشنبه 9 تا 12 ظهر' ? 'selected' : '' }}>یک شنبه 9 تا 12 ظهر</option>
            <option value="دوشنبه و سه شنبه 4 تا 8 شب" {{ $order->zman_ersal == 'دوشنبه و سه شنبه 4 تا 8 شب' ? 'selected' : '' }}>دوشنبه و سه شنبه 4 تا 8 شب </option>
        </select>
        <input type="submit" value="ثبت">
    </form>
</body>

</html>


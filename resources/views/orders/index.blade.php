<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orders List</title>
</head>

<body>
    <center>
    <h1>orders List</h1>
    <table border="1" style="width:700px">
        <tr>
            <th>ID</th>
            <th>fullname</th>
            <th>phone_number </th>
            <th>location</th>
            <th>zman_ersal</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->fullname }}</td>
                <td>{{ $order->phone_number }}</td>
                <td>{{ $order->location }}</td>
                <td>{{ $order->zman_ersal }}</td>
                <td>
                    <a href="/orders/edit/{{ $order->id }}">ویرایش</a> /
                    <form action="/orders/delete/{{ $order->id }}" method="post">
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


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('customers.store')}}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Phone: <input type="text" name="phone"><br>
        Gender: <input type="radio" value="0" name="gender"> Female <input type="radio" value="1" name="gender"> Male <br>
        Email: <input type="email" name="email"><br>
        <button>Add</button>
    </form>
</body>
</html>

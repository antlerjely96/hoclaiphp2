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
<form action="{{route('customers.update',$customer)}}" method="post">
    @csrf
    @method('put')
    Name: <input type="text" name="name" value="{{$customer->name}}"><br>
    Phone: <input type="text" name="phone" value="{{$customer->phone}}"><br>
    Gender: <input type="radio" value="0" name="gender" checked> Female
            <input type="radio" value="1" name="gender"
                @if($customer->gender == 1)
                    checked
                @endif
            > Male <br>
    Email: <input type="email" name="email" value="{{$customer->email}}"><br>
    <button>Update</button>
</form>
</body>
</html>

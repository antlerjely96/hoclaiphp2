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
    <a href="{{route('customers.create')}}">Add</a>
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Gender</td>
            <td>Email</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($customer as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->phone}}</td>
                <td>
                    @if($value->gender == 0)
                        Female
                    @else
                        Male
                    @endif
                </td>
                <td>{{$value->email}}</td>
                <td>
                    <a href="{{route('customers.edit',$value)}}">
                        Update
                    </a>
                </td>
                <td>
                    <form action="{{route('customers.destroy',$value)}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>

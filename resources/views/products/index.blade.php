<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>Index</div>
<div>
    @if (session()->has('success'))
    <div>{{session('success')}}</div>
        
    @endif
</div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($all as $one)
            <tr><td>{{$one->id}}</td>
            <td>{{$one->name}}</td>
            <td>{{$one->price}}</td>
            <td>{{$one->qty}}</td>
            <td>{{$one->description}}</td>
            <td><a href="{{route('product.edit',['product'=>$one])}}">EDIT</a></td>
            <td>
                <form method="post" action="{{route('product.delete',['product'=>$one])}}" >
                    @csrf
                    @method('delete')
                    <input type="submit"  value="Delete" />
                </form>
            </td>
        </tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Create</div>
    <form method="POST" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
                    
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>QTY</label>
            <input type="text" name="qty" placeholder="QTY" value="{{$product->qty}}"  />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}"/>
        </div>        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="save a new product"/>
        </div>
    </form>
</body>
</html>
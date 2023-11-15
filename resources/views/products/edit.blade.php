<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>

    <form method="post" action="{{route('product.update', ['product' => $product])}}">
    @csrf
    @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name='name' value="{{$product->name}}">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name='qty' value="{{$product->qty}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name='price' value="{{$product->price}}">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name='description' value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>
</body>
</html>
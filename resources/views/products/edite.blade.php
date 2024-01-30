@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
    <h1>Edite product</h1>
    <div>
        <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('put')
            
            <div>
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Product name" value="{{$product->name}}">
            </div> <br>

            <div>
                <label for="">Quantity:</label>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{$product->quantity}}">
            </div> <br>

            <div>
                <label for="">Price:</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
            </div> <br>

            <div>
                <label for="">Description:</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{$product->description}}">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Update">
            </div>
        </form>
    </div>
</body>
</html>
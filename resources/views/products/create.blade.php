@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Create Product</h1>
    </div>

    <div class="container">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Product name">
            </div> <br>

            <div>
                <label for="">Quantity:</label>
                <input type="text" class="form-control" name="quantity" placeholder="Quantity">
            </div> <br>

            <div>
                <label for="">Price:</label>
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div> <br>

            <div>
                <label for="">Description:</label>
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
</body>

</html>

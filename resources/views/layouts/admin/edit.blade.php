<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="custom css/style.css">
    <style>
        .mains input{
         margin: 5px;
         width: 250px;
         background-color: black;
         color: white;
         border: none;
         border-bottom:  1px solid white;
        }
        .mains{
            width: 400px;
            height: 300px;
            padding-top: 18px;
            background-image: url('{{asset('image/R.jpg')}}');
        }
        .mains h2{
            color:crimson;
        }
    </style>
</head>
<body>
    <div class="mains ms-5 border border-2 border-dark mt-5 me-5 text-center">
        <form action="/update/{{$details->id}}" method="post" class="form">
            @csrf
            <h2>Update</h2>
            <input type="hidden" name="_method" value="put">
            <input type="text" name="name" placeholder="Enter Product Name" value="{{$details->name}}" class="form-input" > <br>
            <input type="text" name="price" placeholder="Enter Price"  value="{{$details->price}}"class="form-input"><br>
            <input type="text" name="image" placeholder="Enter Product Image" value="{{$details->image}}"class="form-input"></br>
            <button name="save" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
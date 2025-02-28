<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table td{
            font-size:25px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <h1>Cart list</h1>
       <a href="/ordernow"class="btn btn-success">Order Now</a><br><br>
        <table class="table table-striped w-5" border="1px solid black">
            <tr>
                <th>Name</th> 
                <th>Price</th>
                <th>Image</th>
            </tr>
       
        @foreach ($products as $item )
      <tr>
        <td>{{ $item->name }}</td>
        <td>${{ $item->price }}</td>
        <td><img src="{{asset('storage/'.$item->image) }}" alt=""width="130",height="90"></td>
        <td><a href="/removeCart/{{ $item->cart_id}}" class="btn btn-warning">Remove Cart</a></td>
      </tr>
        
        @endforeach
        </table>
    </div>
</body>
</html>
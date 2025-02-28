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
        h1{
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>  
    <div class="main">
        <h1>Order List</h1>
      
        <table class="table table-striped w-5" border="1px solid black">
            <tr>
                <th><h2>Image</h2></th> 
                <th><h2>Details</h2></th>
            </tr>
       
        @foreach ($orders as $item)
      <tr>
        <td><img src="{{asset('storage/'.$item->image) }}" alt=""width="130",height="90"></td>
        <td><h4>{{ $item->name }}</h4>
        <h4>${{ $item->price }}</h4>
        <h4>{{ $item->address }}</h4>
        <h4>{{ $item->status}}</h4>
        <h4>{{ $item->payment_method }}</h4>
        <h4>{{ $item->payment_status }}</h4>    </td>
      </tr>
        
        @endforeach
        </table>
    </div>
</body>
</html>
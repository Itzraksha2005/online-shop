<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <style>
        .main{
            margin:50px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="main col-sm-6">
<table class="table table-striped">
    <tr>
        <th>Price</th>
        <th>{{ $total }} Rupees</th>
      
    </tr>
    <tr>
        <td>Tax</td>
        <td>0 Rupees</td>

    </tr>
    <tr>
        <td>Delivery</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Total amount</td>
        <td>{{ $total+100 }}</td>
    </tr>
</table>
<form action="orderplace" method="post"class="form w-5">
    @csrf
    <div class="form-group">
   <textarea name="address" id="" class="form-control " placeholder="Enter your address">

   </textarea>  </div>
   <div class="form-group">
    <label for="payment_method"><b>Payment Method</b></label>
    <p><input type="radio" name="payment" value="Online Payment"><span>Online Payment</span></p>
    <p><input type="radio" name="payment" value="EMI Payment"><span>EMI Payment</span></p>
    <p><input type="radio" name="payment" value="Cash on delivery"><span>Cash on Delivery</span></p>
   </div>
   <button type="submit" name="save" class="btn btn-warning">Order Now</button>
</form>
    </div>
</body>
</html>
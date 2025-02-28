<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="custom css/style.css">
</head>
<body>
      <div class="main">
        <form action="{{url('add-product')}}" method="post" class="form" enctype="multipart/form-data">
               @csrf
               <h2>Add  Product</h2>
            <div><label for="">Product name:</label><input type="text" name="username"></div>
            <div><label for="">Product Price</label> <input type="text" name="price"></div>
           <div> <label for="">Product Image</label> <input type="file" name="file"></div>
           <button name="save">Add</button>
        </form>
      </div>
</body>
</html>
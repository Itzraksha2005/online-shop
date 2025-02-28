<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/d1f12562cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="custom css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .w-5.h-5{
            width: 20px;
        }
    </style>

</head>

<body>
    <div class="container m-0 p-0">
        <div>
            <div class="dashboard"><i class="fa-solid fa-bars"></i></div>
            <div class="sidebar">
                <div class="nav1">
                    <i class="fa-solid fa-gauge"></i>
                    <p>dashboard</p>
                </div>
                <div class="nav2">
                    <i class="fa-solid fa-list"></i>
                    <p>Category</p> <select name="" id="" class="select">
                        <option value=""></option>
                        <option value="">Men</option>
                        <option value="">Women</option>
                        <option value="">Children</option>
                    </select>
                </div>
                <div class="nav3">
                    <i class="fa-brands fa-product-hunt"></i>
                    <p>Product</p>
                </div>
                <div class="nav4"> 
                    <i class="fa-solid fa-phone"></i>
                    <p>Contact</p>
                </div>
            </div>
        </div>
        <div class="search">
            <form action="{{url('search')}}" method="post">
                @csrf
            <input type="text" placeholder= "Search.." name="search" value="{{@$search}}">
            <button class=" btn btn-primary">Search</button>
            </form>
        </div>
        <div class="text">
             <button class="btn btn-black"><a href="add-product">Add items</a></button>
        </div>

        <div class="tables">
            <table border="1px solid black" class="table table-striped w-5">
                <tr>
                    <th>Product Name</th>
                    <th>Product price</th>
                    <th>Product Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $info)
                    <tr>
                        <td>{{$info->name}}</td>
                        <td>{{$info->price}}</td>
                        <td><img src="{{asset('storage/' . $info->image)}}" alt="Image" width="50" height="40"></td>
                        <td>
                            <a href="{{'edit/' . $info->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{'deleted/' . $info->id}}"
                                onclick="return confirm('Are you sure you want to delete this product?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                @endforeach
            </table>
            {{$data->links()}}
        </div>

    </div>
</body>

</html>
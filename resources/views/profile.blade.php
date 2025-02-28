<?php
 use App\Http\Controllers\usercontroller;
 $total=usercontroller::cartItem();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources\css\app.css')
    <link rel="stylesheet" href="{{asset('custom css/custome.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  
<body>
    <div class="main">
        <div class="cloth">

            <h2>SIXTEEN </h2><span>CLOTHING</span>
        </div>
<div  class="md:hidden sm:block"><a href="" class="sm:no-underline text-4xl">&#8801;</a></div>
        <nav class="navbaar sm:hidden md:block">

            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#product">Out Products</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="myorder">My Orders</a></li>
                <li><a href="cartList">Cart({{ $total }})</a></li>
            </ul>
        </nav>

    </div>
    <div class="log"><a href="login">Sign in </a>/ <a href="registeration">Sign up</a></div>
    <div id="text" class=" w-full flex flex-col justify-center items-center text-xl  md:text-4xl lg:text-6xl">
        <h3>BEST OFFER</h3>
        <h2 class="">NEW ARRIVALS ON SALE</h2>
    </div>
    <div class="latest">
        <h1>Latest Product</h1>
    </div>
    <div class="product" id="product">

        <div class="product1">
            <!-- <div>
                <form action="{{url('add_cart')}}" method="post">
                    @csrf
                <div class="dress" id="dress2">
                    <img src="image/dress3.png" alt="">
                    <div class="sub">
                        <p>Price :450</p> <button name="save">Add to cart</button>
                    </div>
                </div>
                </form>

            </div> -->
            @foreach($data as $value)
            <form action="{{url('add_cart',$value->id)}}" method="post">
                @csrf
                 <input type="hidden" name="product_id" value="{{$value->id}}">
                <div class="dress" id="dress1">

                    <img src="{{asset('storage/' . $value->image)}}" alt="">
                    <div class="sub">
                        <p>Price :{{$value->price}} </p> <button>Add to cart</button>
                    </div>
                </div>
                </form>
            @endforeach
        </div>


        <div class="footer">
            <div class="about" id="about">
                <h3>About</h3>
                <h2> SIXTEEN CLOTHING</h2>
                <p>Looking for the best practice? </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptatum <br> aut aliquid molestias
                    sint. Magni eligendi, mollitia error at est tenetur <br>nisi dicta quam earum unde soluta non
                    delectus officiis deleniti neque harum temporibus dolor <br> quis, nemo ipsum rem? Asperiores
                    suscipit explicabo amet veniam!</p>
                <ul>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit.</li>
                </ul>
                <button class="btn  btn-danger">Read More</button>
            </div>
            <div class="foot-sec"> <img src="image/paper.jpg" alt=""></div>
        </div>
        </div>
</body>

</html>
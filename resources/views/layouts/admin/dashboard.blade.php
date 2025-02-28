<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin
    </title>
    <link rel="stylesheet" href=" custom css/style.css">
</head>
<body>
     <div class="main">
       <form action="log" method="post">
        @csrf
       <h2>Login</h2>
        <input type="text" placeholder="USERNAME" name="username"> <br>
        <input type="text" placeholder="PASSWORD" name="password"><br>
        <div class="checkk"><input type="checkbox" id="check" required><p>KEEP ME SIGN IN</p></div>
           <BUTTON>SIGN IN</BUTTON>      
           <a href="">FORGOT PASSWORD?</a>
       </form>
     </div>
</body>
</html>
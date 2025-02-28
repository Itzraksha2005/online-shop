<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile Page</h1>
    <a href="logout">logout</a>
   @if(session('data'))
       <h1>Welcome ,{{session('data')}}</h1>
   
   @else
         <h1>No user found</h1>
   
   @endif
</body>
</html>
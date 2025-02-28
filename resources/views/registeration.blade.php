<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<label>
<form action="registeration" method="post">
    @csrf
   <div class="main">
        <h1>Register</h1>
        <label for="name">Name</label><input type="text" placeholder="name" name='name'>
        <label for="email">Email</label> <input type="text" placeholder="email" name="email">
        <label for="phone">Phone</label><input type="text" placeholder="Phone" name="phone">
        <label for="password">Password</label> <input type="text" placeholder="Password" name="password">
         <label for="Address">Address</label><input type="text" name="location" placeholder="Address">
   
        <button class="btn btn-primary" type="submit" name="save">Submit</button>
    </div>
   </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RazorPay</title>
</head>
<body>
    <h1>Payment</h1>
    <form action="razorpay" method="post">
        @csrf
        <label for="amount">Amount:</label>
        <input type="text" name="amount">
        <button>Pay</button>
    </form>
</body>
</html>
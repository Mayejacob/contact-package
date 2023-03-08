<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <h1>Contact us</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name"><br>
        <input type="email" name="email" placeholder="Your email"><br>
        <textarea name="message" cols="30" rows="10" placeholder="Your message"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
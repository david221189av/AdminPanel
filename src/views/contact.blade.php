<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
</head>
<body>

<h1>[ Admin panel ]</h1>

<form action="{{ route('contact') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Valide E-mail">
    <textarea name="message" id="" cols="30" placeholder="Your message" rows="10"></textarea>
    <input type="submit" value="send">
</form>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Check Validation Email</h1>
    <form action="{{route('checkEmail')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        <p>Ket qua: {{$isEmail ? "Dung dinh dang" : 'Sai dinh dang'}}</p>
    @endif
</div>
</body>
</html>

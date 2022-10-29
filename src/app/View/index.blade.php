<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sms 平台</title>
</head>
<body>

<h1> 欢迎来到短信平台 </h1>


@foreach ($list as $a)
    <p>Phone: {{ $a[0] }}    Code:    {{ $a[1] }}     </p>
@endforeach


</body>
</html>
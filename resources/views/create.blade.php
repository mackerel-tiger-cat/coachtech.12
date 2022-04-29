<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>
<!--createの入力から送信までのview-->
<body>
  <h1>{{$content}}</h1>
  <form action="/todopractice/create" method="POST">
    @csrf
    <input type="text" name="名前">
    <input type="submit">
  </form>
</body>
</html>
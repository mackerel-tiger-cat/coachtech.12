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
<!--実際に動くかどうか確かめるview・エラーメッセージの表示-->
<body>
  <body>
  <h1>アクセス出来ています。</h1>
<!--
  @foreach ($errors->all() as $error)
   <li>{{$error}}</li>
  @endforeach
-->
<!--
        @if ($errors->has('updatedTodo'))
            <p class="alert alert-danger">{{ $errors->first('updatedTodo') }}</p>
        @endif
-->

  <form action="/todo/create" method="POST">
    @csrf
    <input type="text" name="名前">
    <input type="submit">
  </form>
</body>
</html>
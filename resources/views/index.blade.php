<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel応用テスト</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
  <form action="/" method="POST">
    @csrf
    @error('name')
      <div class="error">{{$message}}</div>
    @enderror
    <label class="label">氏名</label>
    <input type="text" name="name" class="input">
    @error('email')
      <div  class="error">{{$message}}</div>
    @enderror
    <label class="label">メールアドレス</label>
    <input type="text" name="email" class="input">
    <input type="submit">
  </form>
</body>

</html>
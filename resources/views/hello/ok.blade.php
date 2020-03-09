<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @yield('title')

  <p>登録が完了しました</p>
  <form action= method="post">
    {{ csrf_field() }}
    <input type="submit" name="" value="ブログを始める">
  </form>
</body>
</html>

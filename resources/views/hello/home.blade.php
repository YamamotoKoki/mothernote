<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @yield('title')

  @section('search')
  <form action="" method="get">
  　{{ csrf_field() }}
    <input type="search" name="word">
    <input type="submit" name="search" value="検索">
  </form>

  @section('menubar')
  <ul>
	  <li><a href="">Home</a></li>
	  <li><a href="">Myブログ</a></li>
  	<li><a href="">ギャラリー</a></li>
  	<li><a href="">睡眠時間</a></li>
    <li><a href="">成長記録</a></li>
  </ul>

  @section('form')
  <form action="" method="post">
    {{ csrf_field() }}
    <textarea name="body" rows="5" cols="50">
    <tr><th>身長: </th><td><input type="text" name="tall"></td></tr>
    <tr><th>体重: </th><td><input type="text" name="wate"></td></tr>
    <tr><th>写真: </th><td><input type="file" name="photo"></td></tr>
    <tr><th>日付: </th><td><input type="date" name="day"></td></tr>
    <input type="submit" name="" value="投稿">
  </form>
</body>
</html>

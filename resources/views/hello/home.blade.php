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
    @if ($errors->has('title'))
      <tr><th>ERROR</th><td>{{$errors->fist('title')}}</td></tr>
    @endif
    <tr><th>: </th><td><input type="text" name="title"
        value="{{old('title')}}"></td></tr>
    <textarea name="body" rows="5" cols="50">
    @if ($errors->has('tall'))
      <tr><th>ERROR</th><td>{{$errors->fist('tall')}}</td></tr>
    @endif
      <tr><th>: </th><td><input type="text" name="tall"
          value="{{old('tall')}}"></td></tr>
    @if ($errors->has('weight'))
      <tr><th>ERROR</th><td>{{$errors->fist('weight')}}</td></tr>
    @endif
      <tr><th>: </th><td><input type="text" name="weight"
          value="{{old('weight')}}"></td></tr>
    @if ($errors->has('day'))
      <tr><th>ERROR</th><td>{{$errors->fist('day')}}</td></tr>
    @endif
      <tr><th>: </th><td><input type="text" name="day"
          value="{{old('day')}}"></td></tr>
    <input type="submit" name="" value="投稿">
  </form>
</body>
</html>

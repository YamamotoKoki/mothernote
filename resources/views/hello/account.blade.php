<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @yield('title')

  <p>アカウント作成</p>
  <form action="/hello/account" method="post">
    {{ csrf_field() }}
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <p>アカウントお持ちの方</p>
    <form action="" method="post">
  　{{ csrf_field() }}
    @if ($errors->has('name'))
      <tr><th>ERROR</th><td>{{$errors->fist('mail')}}</td></tr>
    @endif
  <tr><th>name: </th><td><input type="text" name="name"
        value="{{old('name')}}"></td></tr>
    @if ($errors->has('mail'))
      <tr><th>ERROR</th><td>{{$errors->fist('mail')}}</td></tr>
    @endif
    <tr><th>mail: </th><td><input type="text" name="mail"
        value="{{old('mail)}}"></td></tr>
    @if ($errors->has('pass'))
      <tr><th>ERROR</th><td>{{$errors->fist('pass')}}</td></tr>
    @endif
    <tr><th>pass: </th><td><input type="text" name="pass"
        value="{{old('pass')}}"></td></tr>
    @if ($errors->has('bathday'))
    <tr><th>ERROR</th><td>{{$errors->fist('bathday')}}</td></tr>
    @endif
    <tr><th>生年月日: </th><td><input type="text" name="bathday"
        value="{{old('bathday')}}"></td></tr>
    <tr><th></th><td><input type="submit" name='account' value="作成"></td></tr>
    </form>
</body>
</html>

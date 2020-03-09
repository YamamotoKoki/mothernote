<!DOCTYPE html>
<html>
<head>
 <link href="css/mothernote.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/mothernote.js"></script>
 <title>MotherNote</title>
  </head>
  <body>
    @section('title')
    <h1>Mothernote</h1>

    @section('home')
      @if (count($errors) > 0)
      <p>入力に問題があります。再入力してください。</p>
      @endif
      <p>アカウントお持ちの方</p>
      <form action="" method="post">
    　{{ csrf_field() }}
      @if ($errors->has('name'))
        <tr><th>ERROR</th><td>{{$errors->fist('mail')}}</td></tr>
      @endif
      <tr><th>mail: </th><td><input type="text" name="mail"
          value="{{old('name)}}"></td></tr>
      @if ($errors->has('pass'))
        <tr><th>ERROR</th><td>{{$errors->fist('pass')}}</td></tr>
      @endif
      <tr><th>pass: </th><td><input type="text" name="pass"
          value="{{old('pass')}}"></td></tr>
      <tr><th></th><td><input type="submit" name='login' value="ログイン"></td></tr>
      </form>

    <p>アカウントお持ちでない方</p>
    <form action="" method="post">
      {{ csrf_field() }}
    <input type="submit" name="account" value="アカウント作成">
    </form>
  </body>
</html>

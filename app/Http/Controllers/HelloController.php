<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uses;

class HelloController extends Controller
{
  public function index(Request $request)
  {
     return view('hello.hello');
  }
  public function post(Request $request)
  {
     if(!empty($request -> account)){
      return view('hello.account');
    }
     else {$validate_rule =  [
              'mail' => 'email',
              'pass' => 'between: 8,16',
          ];
          $this->validate($request, $validate_rule);
          return view('hello.home');
    }
  }
  public function make(Repuest $repuest)
  {
    $validate_rule =  [
             'name' => 'string',
             'mail' => 'email',
             'pass' => 'between: 8,16',
             'bathday' => 'email',
         ];
         $this->validate($request, $validate_rule);
         return view('hello.ok');
  }
  public function move(Repuest $repuest)
  {
      return view('hello.home');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uses extends Model
{

  protected $primaryKey = 'id';

  protected $fillable = ['name','mail','pass'];

  protected $dates = ['bathday','created_at','updated_at',]

  public static $rules = array(
    'name' => 'string',
    'mail' => 'email',
    'pass' => 'between: 8,16',
    'bathday' => 'email',
  );
}

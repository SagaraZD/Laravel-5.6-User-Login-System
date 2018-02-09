<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;


class User extends Model implements Authenticatable
{
use \Illuminate\Auth\Authenticatable;
    
    public function vacancies(){
      return $this->hasMany('App\Vacancy');
    }
}

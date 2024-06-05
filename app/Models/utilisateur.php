<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'FirstName',
   'LastName',
   'Username',
     'Phone',
    'email',
   'password',
    'company_id',
  ];
   //

}

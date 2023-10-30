<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;
class Admin extends Authenticatable
{
   
    protected $guard = "admin"; 
    protected $table = 'admins';
  
} 





?>
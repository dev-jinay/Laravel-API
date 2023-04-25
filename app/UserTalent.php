<?php
   
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class UserTalent extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'users';
    protected $fillable = [
        'email',
        'encrypted_password',
        'role',
        'first_name',
        'last_name',
        'phone_number',
        'email_confirmed',
        'confirm_token'
    ];
}
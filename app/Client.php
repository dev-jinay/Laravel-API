<?php
   
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'source',
        'success_fee',
        'status',
        'user_id',
        'referral_id',
        'created_by',
    ];
}
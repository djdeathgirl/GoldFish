<?php

namespace App\Models\User;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class User_Currency extends Model
{
  public $timestamps = false;
  protected $table = 'users_currency';
  protected $fillable = [];
  public function habbo()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

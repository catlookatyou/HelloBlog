<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $fillable = ['name', 'email', 'cart', 'paid', 'uuid', 'user_id'];

    public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}
}

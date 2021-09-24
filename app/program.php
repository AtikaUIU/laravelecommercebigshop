<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
   public function student(){
    	 return $this->hasOne('App\Student', 'id', 'id'); 
    }
}

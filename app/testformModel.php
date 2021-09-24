<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testformModel extends Model
{
    protected $table = 'testform'; 
    public $timestamps = "false"; 

   public function program(){
    	 return $this->hasOne('App\program', 'id', 'id'); 
    }

}

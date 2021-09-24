<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Students extends Component
{
    public function program(){
    	 return $this->hasOne('App\program', 'id', 'id'); 
    }
}


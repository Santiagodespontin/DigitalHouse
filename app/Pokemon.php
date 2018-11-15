<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Pokemon extends Model
{
    protected $guarded = [];
    public function type(){
        return $this->belongsToMany('\App\Type');
    }
}

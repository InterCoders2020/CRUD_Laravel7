<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name', 'description', 'time'];

    public function flags(){
       return $this->hasMany(Flag::class);
    }
}



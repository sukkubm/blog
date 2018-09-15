<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    
    public function iscomplete()
    {
        return "yes";
    }
    
    public function scopeIncomplete($query)
    {
        return $query->where("id",">",1);
    }
}

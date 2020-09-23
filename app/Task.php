<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function assigned_by(){

        return $this->belongsTo(User::class, 'user_id');
    }
}

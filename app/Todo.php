<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $fillable = [
        'user_id', 'title', 'due_date'
    ];
    
    public function User(){
        return $this->belongsTo('App\User');
    }
}

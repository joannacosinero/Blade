<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'insturctor_id', 'name', 'description', 'start', 'end', 'tags'
    ];

    public function instructor(){
        return $this->belongsTo('App\Instructor');
    }
}

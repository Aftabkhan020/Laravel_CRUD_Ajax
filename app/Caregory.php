<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregory extends Model
{
    protected $table = 'caregories';
    protected $fillable = ['fname','lname','course','section'];
}

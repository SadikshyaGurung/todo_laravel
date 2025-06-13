<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    Use SoftDeletes;


    protected $table = 'todos';
    protected $fillable = ['name','priority','image'];


}

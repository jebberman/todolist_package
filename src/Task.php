<?php

namespace Jebpkgs\Todolist;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name'
    ];
}

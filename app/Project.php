<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    const PAGE_SIZE = 5;

    protected $table = "projects";

    protected $guarded = [];

    public function tasks() {
        return $this->hasMany(Task::class);
    }

}

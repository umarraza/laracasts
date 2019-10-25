<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";

    protected $guarded = [];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true) {

        $this->update(compact('completed'));
        // $this->update(['completed' => true]);
    }

    public function incomplete() {
        $this->complete(false);
    }




}

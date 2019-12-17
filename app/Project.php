<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = [
         'deadline'
    ];

    public function backlog_items()
    {
        return $this->hasMany(BacklogItem::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(ProjectUser::class);
    }
}

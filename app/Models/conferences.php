<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conferences extends Model
{
    use HasFactory;

    public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\User::class, 'users_conferences');
    }

    public function run()
    {
        conferences::factory()
            ->times(50)
            ->create();
    }
}

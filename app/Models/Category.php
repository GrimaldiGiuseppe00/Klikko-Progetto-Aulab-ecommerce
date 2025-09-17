<?php

namespace App\Models;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function announcements(){
        return $this->hasMany(Announce::class);
    }
}

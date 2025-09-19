<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable=[
        'title',
        'price',
        'description',
        'category_id',
        'user_id'
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

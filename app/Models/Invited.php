<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invited extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function invitation(){
        return $this->belongsTo(Invitation::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

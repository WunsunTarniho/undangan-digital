<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function invited(){
        return $this->belongsTo(Invited::class);
    }

    public function invitation(){
        return $this->belongsTo(Invitation::class);
    }
}

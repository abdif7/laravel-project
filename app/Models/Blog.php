<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'created_at', 'updated_at', 'user_id'];
     //guarded attributes
    //protected $guarded = ['id'];
    //relationships
    //A task belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

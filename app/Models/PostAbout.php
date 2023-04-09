<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAbout extends Model
{
    use HasFactory;

    protected $fillable = ['title','link','content', 'users_id'];

    public function users(){

        return $this->belongsTo(User::class)->select('id','name');

    }
}

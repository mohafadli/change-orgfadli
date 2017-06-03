<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Petition extends Model
{
    //
    protected $table = 'petitions';

    protected $fillable = ['title','body'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany( Comment::class);
    }
}

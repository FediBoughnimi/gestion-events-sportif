<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class athlete extends Model
{
    use HasFactory;
    public function commentaires(){
        return $this->morphMany(Commentaire::class, 'commentable');
    }
}

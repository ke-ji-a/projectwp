<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    public function User(){

        return $this->belongsTo(User::class);
    }

    public function komentar(){
        return $this->hasMany(komentar::class);
    }
    use HasFactory;
}

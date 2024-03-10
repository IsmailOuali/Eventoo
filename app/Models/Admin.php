<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    use HasFactory;
    protected $fillable = [
        'id_user',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}

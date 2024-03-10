<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class User extends Authenticatable
{
    use HasFactory, HasRoles;
    protected $guarded = [];

    public function organisateur()
    {
        return $this->hasOne(Organisateur::class);
    }
    public function client()
    {
        return $this->hasOne(Client::class);
    }
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }


    public function event(): Hasmany
    {
        return $this->Hasmany(event::class);
    }

}

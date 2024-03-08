<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class User extends Authenticatable
{
    use HasFactory, HasRoles;
    protected $guarded = [];
    public function event(): Hasmany
    {
        return $this->Hasmany(event::class);
    }

}

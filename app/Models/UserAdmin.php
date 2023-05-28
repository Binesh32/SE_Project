<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserAdmin extends Model
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'useradmin';
    protected $guarded = [];
    protected $table = 'user_admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}

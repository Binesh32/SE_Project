<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class OrganizationsAdmin extends Model
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'organizationadmin';
    protected $guarded = [];
    protected $table = 'organizations_admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}

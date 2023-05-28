<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InboxPost extends Model
{
    use HasFactory;
    protected $table = 'inbox_posts';
    public $timestamps = false;
}

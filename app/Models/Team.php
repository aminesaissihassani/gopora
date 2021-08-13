<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'e_sports_id',
        'slug',
        'name',
        'region',
        'logo',
        'founded_at'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function eSport()
    {
        return $this->belongsTo(ESport::class);
    }
}

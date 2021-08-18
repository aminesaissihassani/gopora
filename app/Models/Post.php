<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_id',
        'e_sport_id',
        'slug',
        'title',
        'image',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function eSport()
    {
        return $this->belongsTo(ESport::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

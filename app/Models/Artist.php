<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'artists';

    protected $fillable = [
        'name',
        'part',
        'place',
        'gender',
        'age',
        'user_id',
        'youtube_url',
        'favorite_musician',
        'self_pr',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

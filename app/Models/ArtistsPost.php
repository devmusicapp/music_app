<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistsPost extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'artists_posts';

    protected $fillable = [
        'title',
        'artist_id',
        'message',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }


}

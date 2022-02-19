<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'creators';

    protected $fillable = [
        'name',
        'gender',
        'fee_1',
        'fee_2',
        'fee_3',
        'user_id',
        'youtube_url',
        'self_pr',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

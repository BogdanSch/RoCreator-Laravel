<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = [
        'game_title',
        'game_content',
        'game_type',
        'game_image',
        'publish_date',
        'game_link',
        'game_available',
    ];
}

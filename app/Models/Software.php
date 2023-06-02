<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'softs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'soft_title',
        'soft_content',
        'soft_type',
        'soft_image',
        'publish_date',
        'soft_link',
        'soft_available',
    ];
}

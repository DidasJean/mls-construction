<?php
// app/Models/Service.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'image',
        'is_active',
        'order'
    ];

    protected $attributes = [
        'is_active' => true,
        'order' => 0,
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
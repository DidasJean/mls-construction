<?php
// app/Models/Realisation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'image',
        'description',
        'featured',
        'category',
        'completion_date'
    ];

    protected $attributes = [
        'featured' => false,
        'category' => 'construction',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'completion_date' => 'date',
    ];
}
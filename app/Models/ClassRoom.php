<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassRoom extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'nama',  
        'teacher_id', 
    ];

    // Eloquent relationship : One To Many
    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class, 'class_id', 'id');
    }


    public function waliKelas(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
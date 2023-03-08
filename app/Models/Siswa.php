<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'name', 
        'gender', 
        'nim', 
        'class_id', 
        // 'created_at', 
        // 'updated_at'
    ];


    // Eloquent relationship : One To Many (Inverse) / Belongs To
    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);  
    }

    // many to many
    public function extracurriculars(): BelongsToMany
    {
        return $this->belongsToMany(Extracurricular::class, 'siswa_extracurricular', 'siswa_id', 'extracurricular_id');
    }
}
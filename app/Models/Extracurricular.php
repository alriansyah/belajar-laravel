<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Extracurricular extends Model
{
    use HasFactory;

    // many to many
    public function siswa(): BelongsToMany
    {
        return $this->belongsToMany(Siswa::class, 'siswa_extracurricular', 'extracurricular_id', 'siswa_id');
    }
}
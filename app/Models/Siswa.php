<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'name', 'gender', 'nim', 'class_id', 'created_at', 'updated_at'
    ];


    // Eloquent relationship : One To Many (Inverse) / Belongs To
    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    use HasFactory;

    protected $table = 'character';

    protected $fillable = [
        'name',
        'real_name',
        'gender',
        'id_universe',
        'new_column',
    ];

    public function universe(): BelongsTo
    {
        return $this->belongsTo(Universe::class, 'id_universe');
    }
}

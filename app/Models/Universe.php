<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Universe extends Model
{
    use HasFactory;

    protected $table = 'universe';

    protected $fillable = [
        'universe',
        'company',
        'edge',
        'new_column'
    ];

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class, 'id_universe');
    }
}

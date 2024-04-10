<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bureau extends Model
{
    use HasFactory;

    protected $table = 'bureaux';

    public function fonctions():BelongsToMany
    {
        return $this->belongsToMany(Fonction::class, 'bureau_fonction');
    }
}

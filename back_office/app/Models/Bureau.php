<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bureau extends Model
{
    use HasFactory;

    public function fonction():BelongsToMany{
        return $this->belongsToMany(Fonction::class);
    }
}

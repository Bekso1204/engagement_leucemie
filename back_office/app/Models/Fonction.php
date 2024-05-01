<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fonction extends Model
{
    use HasFactory;

    public function bureau():BelongsToMany{
        return $this->belongsToMany(Bureau::class, 'bureau_fonction');
    }
}

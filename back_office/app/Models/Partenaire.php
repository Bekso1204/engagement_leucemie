<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partenaire extends Model
{
    use HasFactory;

    public function liens():HasMany{
        return $this->hasMany(Lien::class);
    }
}

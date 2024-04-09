<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lien extends Model
{
    use HasFactory;

    public function partenaire():BelongsTo{
        return $this->belongsTo(Partenaire::class);
    }
}

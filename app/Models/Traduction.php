<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Traduction extends Model
{
    use HasFactory;

    // Relationships
    public function canton(): BelongsTo
    {
        return $this->belongsTo(Canton::class);
    }

    public function language():BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
 
    public function style():BelongsTo
    {
        return $this->belongsTo(Style::class);
    }



}

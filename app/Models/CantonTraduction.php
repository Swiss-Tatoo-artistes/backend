<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CantonTraduction extends Model
{
    use HasFactory;

    // Relationships
    public function style():BelongsTo
    {
        return $this->belongsTo(Canton::class);
    }



}

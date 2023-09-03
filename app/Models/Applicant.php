<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Applicant extends Model
{
    use HasFactory;

    /**
     * Get the listing for the applicant.
     */
    public function listing(): BelongsTo {
        return $this->belongsTo(Listing::class);
    }
}

<?php

// Namespacing.
namespace App\Models;

// Facades.
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    /**
     * Traits
     *
     */
    use HasFactory;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [
        'loan',
    ];

    /**
     * Model relations.
     *
     */
    public function loan()
    {
        return $this->belongsTo(\App\Models\Loan::class);
    }
}

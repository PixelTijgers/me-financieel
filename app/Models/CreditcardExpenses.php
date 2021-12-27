<?php

// Namespacing.
namespace App\Models;

// Facades.
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditcardExpenses extends Model
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
        'company',
    ];

    /**
     * Model relations.
     *
     */
    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }
}

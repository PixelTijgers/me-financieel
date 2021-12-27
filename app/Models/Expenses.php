<?php

// Namespacing.
namespace App\Models;

// Facades.
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
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
        'account',
        'company',
    ];

    /**
     * Model relations.
     *
     */
    public function account()
    {
        return $this->belongsTo(\App\Models\Account::class);
    }

    public function company()
    {
        return $this->belongsTo(\App\Models\Account::class);
    }
}

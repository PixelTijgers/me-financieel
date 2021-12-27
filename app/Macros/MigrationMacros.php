<?php

// Namespace
namespace App\Macros;

// Facades
use Illuminate\Support\Str;

class MigrationMacros
{
    public static function getMacros(): array
    {
        return [

            /*
            * Create a relation in the database with a single function.
            *
            * return mixed
            */
            'relateTo' => function($tableName, $onDelete = 'cascade')
            {
                $this->bigInteger($tableName . '_id')->unsigned();
                $this->foreign($tableName . '_id')->references('id')->on(Str::plural($tableName))->onDelete($onDelete);
            },
        ];
    }
}

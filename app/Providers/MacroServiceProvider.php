<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * @var array Contains the custom macro classes.
     */
     protected $macroClasses = [
         \Illuminate\Database\Schema\Blueprint::class => \App\Macros\MigrationMacros::class,
     ];

     /**
     * Loop through the custom macro classes.
     *
     * @return void
     */
     protected function bootCustomMacroClasses()
     {
         foreach($this->macroClasses as $macroable => $class)
         {
             // Macro methods on macroable.
             foreach($class::getMacros() as $method => $fn)
                 $macroable::macro($method, $fn);
         }
     }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Boot the single Macros.
        $this->bootCustomMacroClasses();

    }
}

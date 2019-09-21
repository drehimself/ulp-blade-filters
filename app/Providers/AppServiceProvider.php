<?php

namespace App\Providers;

use Pine\BladeFilters\BladeFilters;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        BladeFilters::macro('sarcastic', function ($value) {
            $newString = $value;

            for ($i=0; $i < strlen($newString); $i++) {
                if ($i % 2 === 0) {
                    $newString[$i] = strtoupper($newString[$i]);
                }
            }

            return $newString;
        });
    }
}

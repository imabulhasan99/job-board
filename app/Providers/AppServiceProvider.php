<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Http::macro('job', function () {
            return Http::withHeaders([
                'X-RapidAPI-Host' => 'jsearch.p.rapidapi.com',
                'X-RapidAPI-Key' => config('job-fetch.apiKey'),
            ])->baseUrl('https://jsearch.p.rapidapi.com');
        });

        Http::macro('mailerlite', function () {
            return Http::withToken(config('mailerlite.api_key'))
                ->baseUrl('https://connect.mailerlite.com/');
        });
    }
}

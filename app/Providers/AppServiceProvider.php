<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
            $apiKey = DB::table('api_keys')->orderByDesc('request_count')->first();

            return Http::withHeaders([
                'X-RapidAPI-Host' => 'jsearch.p.rapidapi.com',
                'X-RapidAPI-Key' => $apiKey->api_key,
            ])->baseUrl('https://jsearch.p.rapidapi.com');
        });

        Http::macro('emailverify', function () {
            $apiKeys = config('subscriber-verify.apiKeys');
            $keyIndex = 0;
            $apiKey = $apiKeys[$keyIndex];
            $keyIndex = ($keyIndex + 1) % count($apiKeys);

            return Http::withHeaders([
                'X-RapidAPI-Host' => 'mailcheck.p.rapidapi.com',
                'X-RapidAPI-Key' => $apiKey,
            ])->baseUrl('https://mailcheck.p.rapidapi.com');
        });

        Http::macro('mailerlite', function () {
            return Http::withToken(config('mailerlite.api_key'))
                ->baseUrl('https://connect.mailerlite.com/');
        });
    }
}

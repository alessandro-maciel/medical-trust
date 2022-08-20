<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MedicalTrust\MedicalTrustService;

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
        $this->app->singleton(
            MedicalTrustService::class,
            fn () => new MedicalTrustService(
                baseUrl: strval(config('services.medical_trust.url')),
                apiToken: strval(config('services.medical_trust.token')),
            ),
        );
    }
}

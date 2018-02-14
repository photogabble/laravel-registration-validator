<?php
namespace Photogabble\LaravelRegistrationValidator;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/registration-validation.php' => config_path('registration-validation.php')
        ], 'config');

        /** @var \Illuminate\Validation\Factory $validator */
        $validator = $this->app->make('validator');
        $validator->extend('not_reserved_name', '\Photogabble\LaravelRegistrationValidator\Validators@validateNotReservedName');
        $validator->extend('not_confusable_string', '\Photogabble\LaravelRegistrationValidator\Validators@validateConfusable');
        $validator->extend('not_confusable_email', '\Photogabble\LaravelRegistrationValidator\Validators@validateConfusableEmail');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/registration-validation.php', 'registration-validation'
        );
    }
}
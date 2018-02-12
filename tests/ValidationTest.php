<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

use Orchestra\Testbench\TestCase;
use Photogabble\LaravelRegistrationValidator\ServiceProvider;

class ValidationTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function testReservedNameValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');
        $validation->validate(['username' => 'carbontwelve@users.noreply.github.com'], ['username' => 'not-reserved-name']);
    }

    public function testConfusableStringValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');

        // @todo
    }

    public function testConfusableEmailValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');

        // @todo
    }
}
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

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function testReservedNameValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');

        $this->expectException(\Illuminate\Validation\ValidationException::class);
        $validation->validate(['username' => 'carbontwelve@users.noreply.github.com'], ['username' => 'not-reserved-name']);
    }

    public function testConfusableStringValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');

        $this->assertTrue(false);
        // @todo
    }

    public function testConfusableEmailValidator()
    {
        /** @var \Illuminate\Validation\Factory $validation */
        $validation = $this->app->make('validator');

        $this->assertTrue(false);
        // @todo
    }
}
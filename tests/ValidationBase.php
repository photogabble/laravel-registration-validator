<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

use Orchestra\Testbench\TestCase;
use Photogabble\LaravelRegistrationValidator\ServiceProvider;

class ValidationBase extends TestCase
{
    /**
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function setUp()
    {
        parent::setUp();
        $this->validator = $this->app->make('validator');
    }
}
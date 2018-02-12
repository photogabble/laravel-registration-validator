<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

class ReservedNameValidationTest extends ValidationBase
{

    /**
     * @expectedException \Illuminate\Validation\ValidationException
     */
    public function testReservedNameValidator()
    {
        $this->validator->validate(['username' => 'carbontwelve@users.noreply.github.com'], ['username' => 'not-reserved-name']);
    }

}
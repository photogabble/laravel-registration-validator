<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

class ReservedNameValidationTest extends ValidationBase
{
    public function testReservedNameValidator()
    {
        $class = new \stdClass();

        $this->assertFalse($this->validator->make(['username' => 3.14], ['username' => 'not-reserved-name'])->passes());
        $this->assertFalse($this->validator->make(['username' => 1234], ['username' => 'not-reserved-name'])->passes());
        $this->assertFalse($this->validator->make(['username' => $class], ['username' => 'not-reserved-name'])->passes());

        $this->assertFalse($this->validator->make(['username' => 'carbontwelve@users.noreply.github.com'], ['username' => 'not-reserved-name'])->passes());
        $this->assertFalse($this->validator->make(['username' => 'webmaster'], ['username' => 'not-reserved-name'])->passes());
        $this->assertFalse($this->validator->make(['username' => '.well-known'], ['username' => 'not-reserved-name'])->passes());

        $this->assertTrue($this->validator->make(['username' => 'photogabble'], ['username' => 'not-reserved-name'])->passes());
        $this->assertTrue($this->validator->make(['username' => 'hello-world'], ['username' => 'not-reserved-name'])->passes());
        $this->assertTrue($this->validator->make(['username' => 'hello.world'], ['username' => 'not-reserved-name'])->passes());
    }
}

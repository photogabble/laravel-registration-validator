<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

class ConfusableStringValidationTest extends ValidationBase
{

    public function testConfusableStringValidator()
    {
        $this->assertFalse($this->validator->make(['username' => 'Alloτ'], ['username' => 'not-confusable-string'])->passes());
        $this->assertFalse($this->validator->make(['username' => 'www.micros﻿оft.com'], ['username' => 'not-confusable-string'])->passes());
        $this->assertFalse($this->validator->make(['username' => 'www.Αpple.com'], ['username' => 'not-confusable-string'])->passes());
        $this->assertFalse($this->validator->make(['username' => 'www.faϲebook.com'], ['username' => 'not-confusable-string'])->passes());

        $this->assertTrue($this->validator->make(['username' => 'Hello world!'], ['username' => 'not-confusable-string'])->passes());
        $this->assertTrue($this->validator->make(['username' => 'ABC123'], ['username' => 'not-confusable-string'])->passes());
        $this->assertTrue($this->validator->make(['username' => 'Row-Row'], ['username' => 'not-confusable-string'])->passes());
        $this->assertTrue($this->validator->make(['username' => '102781726'], ['username' => 'not-confusable-string'])->passes());
        $this->assertTrue($this->validator->make(['username' => 'PhotoGabble.co.uk'], ['username' => 'not-confusable-string'])->passes());
    }

    public function testConfusableEmailValidator()
    {
        $this->assertTrue($this->validator->make(['email' => 'hello-world@example.com'], ['email' => 'not-confusable-email'])->passes());
        $this->assertFalse($this->validator->make(['email' => 'hello-world@faϲebook.com'], ['email' => 'not-confusable-email'])->passes());
        $this->assertFalse($this->validator->make(['email' => 'hello-world@Αpple.com'], ['email' => 'not-confusable-email'])->passes());
    }

}
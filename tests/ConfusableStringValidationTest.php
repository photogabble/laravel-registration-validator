<?php
namespace Photogabble\LaravelRegistrationValidator\Tests;

class ConfusableStringValidationTest extends ValidationBase
{

    public function testConfusableStringValidator()
    {
        $this->assertTrue($this->validator->make(['username' => 'Alloτ'], ['username' => 'not-confusable-string'])->fails());
        $this->assertTrue($this->validator->make(['username' => 'www.micros﻿оft.com'], ['username' => 'not-confusable-string'])->fails());
        $this->assertTrue($this->validator->make(['username' => 'www.Αpple.com'], ['username' => 'not-confusable-string'])->fails());
        $this->assertTrue($this->validator->make(['username' => 'www.faϲebook.com'], ['username' => 'not-confusable-string'])->fails());

        $this->assertTrue($this->validator->make(['username' => 'Hello world!'], ['username' => 'not-confusable-string'])->passes());
    }

    public function testConfusableEmailValidator()
    {
        $this->assertTrue(false);
        // @todo
    }

}
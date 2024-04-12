<?php

namespace davidsonts\ValidatorDocs\Tests;

use davidsonts\ValidatorDocs\ValidatorProvider;
use Orchestra\Testbench\TestCase;

abstract class ValidatorTestCase extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->register(ValidatorProvider::class);
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /** @test */
    public function environment_is_configured()
    {
        $this->assertNotEmpty(env('APP_ENV'));
    }
}

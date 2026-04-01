<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    /** @test */
    public function application_boots_successfully()
    {
        $this->get('/')->assertStatus(200);
    }
}

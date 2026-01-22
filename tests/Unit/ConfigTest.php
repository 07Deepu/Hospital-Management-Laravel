<?php

namespace Tests\Unit;

use Tests\TestCase;

class ConfigTest extends TestCase
{
    /** @test */
    public function application_name_is_set()
    {
        $this->assertNotNull(config('app.name'));
    }
}

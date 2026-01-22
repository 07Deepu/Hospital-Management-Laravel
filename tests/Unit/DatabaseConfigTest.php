<?php

namespace Tests\Unit;

use Tests\TestCase;

class DatabaseConfigTest extends TestCase
{
    /** @test */
    public function database_connection_is_defined()
    {
        $this->assertNotEmpty(config('database.default'));
    }
}

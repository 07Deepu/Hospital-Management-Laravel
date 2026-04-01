<?php

namespace Tests\Unit;

use Tests\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function string_helper_works()
    {
        $this->assertEquals('test', strtolower('TEST'));
    }
}

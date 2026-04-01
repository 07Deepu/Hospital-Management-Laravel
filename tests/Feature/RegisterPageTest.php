<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterPageTest extends TestCase
{
    /** @test */
    public function register_page_is_accessible()
    {
        $this->get('/register')->assertStatus(200);
    }
}

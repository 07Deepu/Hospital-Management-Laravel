<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /** @test */
    public function login_page_is_accessible()
    {
        $this->get('/login')->assertStatus(200);
    }
}

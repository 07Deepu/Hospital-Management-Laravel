<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /** @test */
    public function home_page_is_accessible()
    {
        $this->get('/')->assertStatus(200);
    }
}

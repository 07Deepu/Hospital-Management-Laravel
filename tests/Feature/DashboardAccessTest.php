<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardAccessTest extends TestCase
{
    /** @test */
    public function dashboard_redirects_if_not_authenticated()
    {
        $this->get('/dashboard')->assertStatus(302);
    }
}

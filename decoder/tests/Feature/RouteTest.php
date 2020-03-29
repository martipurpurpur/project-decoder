<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
        public function testBaseTest()
        {
            $response = $this->get('/base64');

            $response->assertStatus(200);
        }

    public function testRouteUue()
    {
        $response = $this->get('/uue');

        $response->assertStatus(200);
    }
    public function testRouteRot()
    {
        $response = $this->get('/rot');

        $response->assertStatus(200);
    }
    }

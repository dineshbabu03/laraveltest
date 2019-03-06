<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCheckText()
    {
    	$this->get('/')->assertStatus(200);
    }

    public function testAboutPage()
    {
    	$response = $this->get('/about');
    	$response->assertStatus(200);
    	$response->assertSee('Dinesh');
    }
}

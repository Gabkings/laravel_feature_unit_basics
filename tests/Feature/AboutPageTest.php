<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageTest extends TestCase
{
    public function testAboutPage(){
        $res = $this->get('/about');

        $res->assertStatus(200);
        $res->assertSee("About Me"); 
    }
}

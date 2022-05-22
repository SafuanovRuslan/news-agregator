<?php

namespace Tests\Feature\News;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news()
    {
        $response = $this->get('/category/all/news');

        $response->assertStatus(200);
    }

    public function test_newsById()
    {
        $response = $this->get('/category/all/news/1');

        $response->assertStatus(200);
    }

    public function test_category()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
    }
}

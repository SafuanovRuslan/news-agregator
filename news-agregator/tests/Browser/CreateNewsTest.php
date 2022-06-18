<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/category/1/news/create')
                    ->type('title', 'test news title')
                    ->type('body', 'test news body with some content for you')
                    ->press('Создать')
                    ->assertPathIs('/category/1/news');
        });
    }

    public function test2Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/category/1/news/create')
                    ->type('title', '')
                    ->type('body', 'test news body with some content for you')
                    ->assertSee('The title field is required')
                    ->assertPathIs('/category/1/news/create');
        });
    }
}

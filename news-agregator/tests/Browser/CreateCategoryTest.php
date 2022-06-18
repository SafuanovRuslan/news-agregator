<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateCategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/category/create')
                    ->type('name', 'test category name')
                    ->press('Создать')
                    ->assertPathIs('/category');
        });
    }

    public function test2Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/category/create')
                    ->type('name', '')
                    ->type('body', 'test news body with some content for you')
                    ->assertSee('The name field is required')
                    ->assertPathIs('/category/create');
        });
    }
}

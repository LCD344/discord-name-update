<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase {
    /**
     * A Dusk test example.
     */
    public function testExample(): void {
        $this->browse(function(Browser $browser) {
            $browser->visit('channels/@me')
                ->waitForInput('email', 30)
                ->typeSlowly('email', 'lcd344@yahoo.com')
                ->pause(2000)
                ->typeSlowly('password', '5wcMGa99xDg9TVh')
                ->pause(2000)
                ->press('Log In')
                ->waitFor('button[aria-label="User Settings"]',30)
                ->click('button[aria-label="User Settings"]')
                ->waitFor('[aria-label="Profiles"]',30)
                ->click('[aria-label="Profiles"]')
                ->waitForText('Server Profiles',30)
                ->clickAtXPath("//div[text()='Server Profiles']")
                ->waitFor('div[aria-hidden] + input[role=combobox]',30)
                ->typeSlowly('div[aria-hidden] + input[role=combobox]', 'poleconreadgro')
                ->keys('div[aria-hidden] + input[role=combobox]', '{enter}')
                ->waitFor('input[name]',30)
                ->pause(2000)
                ->typeSlowly('input[name]', 'lcd. kamala is genocide')
                ->pause(2000)
                ->press('Save Changes')
                ->pause(30000)
            ;
        });
    }
}

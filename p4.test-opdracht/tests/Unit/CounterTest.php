<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class CounterTest extends TestCase
{
    public function test_counter_buttons_are_present()
    {
        // Maak een nieuwe gebruiker aan
        $user = User::factory()->make();

        // Log de gebruiker in
        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200); 
        $response->assertSee('+'); 
        $response->assertSee('-'); 
        $response->assertSee('counter-value'); 
    }
}

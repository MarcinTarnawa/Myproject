<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/');
    }

    public function test_user_cannot_view_a_create_form_when_not_authenticated()
    {
        $response = $this->get('/jobs/create');

        $response->assertStatus(500);
    }
    
    public function test_user_can_view_a_create_form_when_authenticated()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get('/jobs/create');

        $response->assertStatus(200);
    }
}
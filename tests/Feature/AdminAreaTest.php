<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAreaTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_area_requires_authentication(): void
    {
        $response = $this->get('/admin-area');

        $response->assertRedirect('/login');
    }

    public function test_non_admin_users_receive_a_403_response(): void
    {
        $user = User::factory()->create([
            'is_admin' => false,
        ]);

        $response = $this->actingAs($user)->get('/admin-area');

        $response->assertForbidden();
    }

    public function test_admin_users_can_view_the_admin_area(): void
    {
        $user = User::factory()->admin()->create();

        $response = $this->actingAs($user)->get('/admin-area');

        $response->assertOk();
        $response->assertSeeText('Access granted. Only administrators can view this page.');
    }
}

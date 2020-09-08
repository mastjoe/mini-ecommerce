<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserApiTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function setup() :void
    {
        parent::setUp();
        // factory(User::class)->create(['email' => 'test@email.com']);
        // \Artisan::call('passport:install');
    }

    /**@test */
    public function user_can_register()
    {
        $email = $this->faker->email;
        $this->json('POST', 'api/v1/register', [
            "first_name"            => $this->faker->firstName,
            "last_name"             => $this->faker->lastName,
            "email"                 => $email,
            "phone"                 => $this->faker->numberBetween(10000000, 99999999),
            "address"               => $this->faker->address,
            "password"              => "password",
            "password_confirmation" => "password"
        ])
            ->assertCreated()
            ->assertJson(["status" => "success"]);
    }

   
    /**@test */
    public function user_needs_email_and_password_to_login()
    {
        $this->postJson('api/v1/login')
            ->assertStatus(422)
            ->assertJsonStructure([
                'message',
                'errors' => [
                    'password',
                    'email'
                ]
            ]);
    }

    /**
     * check if user can login
     */
    public function user_can_login()
    {
        // $user = factory(User::class)->create(['email' => 'test@email.com']);
        // dump($user->email);
        // // Passport::actingAs($user);
        $user = factory(User::class)->create(['email' => 'test@email.com']);
        $this->artisan('passport:install');
        $response =  $this->json('POST', 'api/v1/login', [
            'email' => $user->email,
            'password' => 'password'
        ], ['Accept' => 'application/json']);
    }
}

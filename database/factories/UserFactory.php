<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' => 'Mpemba Mpuya',
        //     'role' => 'administrator',
        //     'email' => 'mabugamashamba@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(10),
        // ];
        // return [
        //     'name' => 'Joel Mussa',
        //     'role' => 'store_manager',
        //     'email' => 'joel@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(10),
        // ];
        // return [
        //     'name' => 'Saddo Soddox',
        //     'role' => 'cashier',
        //     'email' => 'saddo@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(10),
        // ];
        // return [
        //     'name' => 'Super Admin',
        //     'role' => 'administrator',
        //     'email' => 'admin@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('admin123'),
        //     'remember_token' => Str::random(10),
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

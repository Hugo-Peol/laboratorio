<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(tenant()){
            User::factory()->create([
                'name' => tenant()->id . 'User',
                'email' => tenant()->id . '@example.com',
            ]);
        }else{
            $tenant1 = Tenant::query()->create(['id' => 'foo']);
            $tenant1->domains()->create(['domain' => 'foo.localhost']);
        }


        $this->call([
            TenantSeeder::class,
        ]);
    }
}

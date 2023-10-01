<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!tenant()){
            $tenant1 = Tenant::create(['id' => 'hop']);
            $tenant1->domains()->create(['domain' => 'hop.localhost']);
        }
        
    }
}

<?php

namespace Tests;

use App\Models\Tenant;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $tenancy = false;

    public function setUp(): void
    {
        parent::setUp();

        if ($this->tenancy) {
            $this->initializeTenancy();
        }
    }

    public function initializeTenancy()
    {
        $tenant = Tenant::create();

        tenancy()->initialize($tenant);
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\PropertiesWasiController;

class PropertieswasiModuleTest extends TestCase
{
    /** @test **/
    function load_properties_from_api_wasi()
    {
        //$this->markTestIncomplete('This test has not been implemented yet.');
        $properties = PropertiesWasiController::getPropertiesWasiAttribute();
        $this->assertTrue(true);
    }
    /** @test **/
    function update_properties_from_api_wasi()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}

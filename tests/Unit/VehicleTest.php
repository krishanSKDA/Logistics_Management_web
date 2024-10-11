<?php

namespace Tests\Unit;

use App\Models\Vehicle; 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_fill_mass_assignment_attributes()
    {
        $vehicleData = [
            'make' => 'Toyota',
            'vehicle_model' => 'Camry',
            'registration_number' => 'ABC1234',
            'year' => '2022',
            'type' => 'other', 
        ];

        $vehicle = Vehicle::create($vehicleData); 

        $this->assertEquals($vehicleData['make'], $vehicle->make);
        $this->assertEquals($vehicleData['vehicle_model'], $vehicle->vehicle_model);
        $this->assertEquals($vehicleData['registration_number'], $vehicle->registration_number);
        $this->assertEquals($vehicleData['year'], $vehicle->year);
        $this->assertEquals($vehicleData['type'], $vehicle->type);
    }
}

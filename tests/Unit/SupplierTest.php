<?php

namespace Tests\Unit;

use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupplierTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_fill_mass_assignment_attributes()
    {
        $supplierData = [
            'name' => 'ABC Supplies',
            'contact_person' => 'John Doe',
            'email' => 'krishan@gmail.com',
            'phone' => '1234567890',
            'address' => '123 Supplier St, City, Country',
        ];

        $supplier = Supplier::create($supplierData);

        $this->assertEquals($supplierData['name'], $supplier->name);
        $this->assertEquals($supplierData['contact_person'], $supplier->contact_person);
        $this->assertEquals($supplierData['email'], $supplier->email);
        $this->assertEquals($supplierData['phone'], $supplier->phone);
        $this->assertEquals($supplierData['address'], $supplier->address);
    }
}

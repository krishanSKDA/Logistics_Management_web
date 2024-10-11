<?php

namespace Tests\Unit;

use App\Models\Shipment;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShipmentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_fill_mass_assignment_attributes()
    {
       
        $order = Order::factory()->create();

        $shipmentData = [
            'order_id' => $order->id, 
            'tracking_number' => 'TRACK123456',
            'carrier' => 'FedEx',
            'shipped_date' => now(),
        ];

        $shipment = Shipment::create($shipmentData);

        $this->assertEquals($shipmentData['order_id'], $shipment->order_id);
        $this->assertEquals($shipmentData['tracking_number'], $shipment->tracking_number);
        $this->assertEquals($shipmentData['carrier'], $shipment->carrier);
        $this->assertEquals($shipmentData['shipped_date'], $shipment->shipped_date);
    }

    /** @test */
    public function it_belongs_to_an_order()
    {
        $order = Order::factory()->create();
        $shipment = Shipment::factory()->create(['order_id' => $order->id]);

        $this->assertInstanceOf(Order::class, $shipment->order);
        $this->assertEquals($order->id, $shipment->order->id);
    }
}

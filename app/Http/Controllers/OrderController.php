<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // List all orders
    public function index()
    {
        $orders = Order::where('customer_id', auth()->user()->customer->id)->get();

        return response()->json([
            'success' => true,
            'orders' => $orders
        ], 200);
    }

    // Show a specific order by ID
    public function show($id)
    {
        $order = Order::find($id);

        if (!$order || $order->customer_id !== auth()->user()->customer->id) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json([
            'success' => true,
            'order' => $order,
        ], 200);
    }

    // Create a new order
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'receiver_name' => 'required|string|max:255',
            'order_type' => 'required|string',
            'shipping_address' => 'required|string',
            'package_size' => 'required|string',
            'package_weight' => 'required|string',
            'delivery_instructions' => 'nullable|string',
            'terms_and_conditions' => 'accepted', 
        ]);

        // Create a new order
        $order = new Order();
        $order->customer_id = auth()->user()->customer->id;
        $order->order_number = 'ORD-' . uniqid();
        $order->order_date = now();
        $order->receiver_name = $request->receiver_name;
        $order->order_type = $request->order_type;
        $order->shipping_address = $request->shipping_address;
        $order->package_size = $request->package_size;
        $order->package_weight = $request->package_weight;
        $order->delivery_instructions = $request->delivery_instructions;

        // Save the order to the database
        $order->save();

        return redirect()->back();
    }

    // Update an existing order
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order || $order->customer_id !== auth()->user()->customer->id) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'receiver_name' => 'required|string|max:255',
            'order_type' => 'required|string',
            'shipping_address' => 'required|string',
            'package_size' => 'required|string',
            'package_weight' => 'required|string',
            'delivery_instructions' => 'nullable|string',
        ]);

        // Update the order
        $order->receiver_name = $request->receiver_name;
        $order->order_type = $request->order_type;
        $order->shipping_address = $request->shipping_address;
        $order->package_size = $request->package_size;
        $order->package_weight = $request->package_weight;
        $order->delivery_instructions = $request->delivery_instructions;

        // Save the updated order to the database
        $order->save();

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully',
            'order' => $order,
        ], 200);
    }

    // Delete an order
    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order || $order->customer_id !== auth()->user()->customer->id) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Delete the order
        $order->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order deleted successfully',
        ], 200);
    }
}

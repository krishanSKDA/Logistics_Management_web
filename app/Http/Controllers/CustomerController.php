<?php
namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // 1. Retrieve all customers
    public function index()
    {
        $customers = Customers::all();
        return response()->json($customers, 200); 
    }

    // 2. Retrieve a specific customer by ID
    public function show($id)
    {
        $customer = Customers::find($id);

        if ($customer) {
            return response()->json($customer, 200);
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    // 3. Create a new customer
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|unique:customers,customer_email',
            'customer_phone' => 'required|string|max:15|unique:customers,customer_phone',
            'alternative_phone' => 'nullable|string|max:15',
            'customer_address' => 'required|string|max:255',
            'billing_address' => 'nullable|string|max:255',
            'payment_info' => 'nullable|string',
        ]);

        // Create a new customer record
        $customer = Customers::create([
            'user_id' => Auth::id(), 
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
            'alternative_phone' => $request->input('alternative_phone'),
            'customer_address' => $request->input('customer_address'),
            'billing_address' => $request->input('billing_address'),
            'payment_info' => $request->input('payment_info'),
        ]);

        if ($request->expectsJson()) {
            return response()->json($customer, 201); 
        }

        return redirect()->back();
    }

    // 4. Update a customer by ID
    public function update(Request $request, $id)
    {
        $customer = Customers::find($id);

        if ($customer) {
            // Validate the request data
            $request->validate([
                'customer_name' => 'required|string|max:255', 
                'customer_email' => 'required|email|unique:customers,customer_email,' . $id,
                'customer_phone' => 'required|string|max:15|unique:customers,customer_phone,' . $id,
                'alternative_phone' => 'nullable|string|max:15',
                'customer_address' => 'required|string|max:255',
                'billing_address' => 'nullable|string|max:255',
                'payment_info' => 'nullable|string',
            ]);

            // Update the customer
            $customer->update([
                'customer_name' => $request->input('customer_name'),
                'customer_email' => $request->input('customer_email'),
                'customer_phone' => $request->input('customer_phone'),
                'alternative_phone' => $request->input('alternative_phone'),
                'customer_address' => $request->input('customer_address'),
                'billing_address' => $request->input('billing_address'),
                'payment_info' => $request->input('payment_info'),
            ]);

            return response()->json($customer, 200); 
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    // 5. Delete a customer by ID
    public function destroy($id)
    {
        $customer = Customers::find($id);

        if ($customer) {
            $customer->delete();
            return response()->json(['message' => 'Customer deleted'], 200);
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }
}

<div class="max-w-6xl mx-auto p-4"> <!-- Container with max-width and centered alignment -->
    <table class="table-auto w-full border-collapse border border-gray-400">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Order Number</th>
                <th class="border border-gray-300 px-4 py-2">Order Date</th>
                <th class="border border-gray-300 px-4 py-2">Receiver Name</th>
                <th class="border border-gray-300 px-4 py-2">Shipping Address</th>
                <th class="border border-gray-300 px-4 py-2">Package Size</th>
                <th class="border border-gray-300 px-4 py-2">Status</th>
                <th class="border border-gray-300 px-4 py-2">Shipped Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->order_number }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->order_date->format('Y-m-d') }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->receiver_name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->shipping_address }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->package_size }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->status }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $order->shipment ? $order->shipment->shipped_date : 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center border border-gray-300 px-4 py-2">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

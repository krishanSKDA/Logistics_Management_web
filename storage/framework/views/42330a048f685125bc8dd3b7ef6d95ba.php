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
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->order_number); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->order_date->format('Y-m-d')); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->receiver_name); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->shipping_address); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->package_size); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->status); ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?php echo e($order->shipment ? $order->shipment->shipped_date : 'N/A'); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7" class="text-center border border-gray-300 px-4 py-2">No orders found.</td>
                </tr>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </tbody>
    </table>
</div>
<?php /**PATH D:\SSP_Website_Sem02\Logistics_Management - Testing\Logistics_website\resources\views/livewire/order-history.blade.php ENDPATH**/ ?>
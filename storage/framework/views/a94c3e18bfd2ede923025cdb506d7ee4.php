<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Create New Order
</h4>
<form method="POST" action="<?php echo e(route('orders.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <!-- Order Information -->
        <h5 class="mb-4 text-md font-semibold text-gray-600 dark:text-gray-300">Order Information</h5>

        <!-- Receiver Name -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Receiver Name</span>
            <input name="receiver_name" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Receiver name" required />
        </label>

        <!-- Order Date -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Order Date</span>
            <input name="order_date" type="date" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" required />
        </label>

        <!-- Order Type -->
        <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Order Type</span>
            <div class="mt-2">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input type="radio" name="order_type" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" value="standard" required />
                    <span class="ml-2">Standard</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input type="radio" name="order_type" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" value="express" required />
                    <span class="ml-2">Express</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input type="radio" name="order_type" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" value="pro" required />
                    <span class="ml-2">Pro</span>
                </label>
            </div>
        </div>

        <!-- Shipping Address -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Shipping Address</span>
            <textarea name="shipping_address" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter shipping address here." required></textarea>
        </label>

        <!-- Package Size -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Package Size</span>
            <select name="package_size" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="extra-large">Extra-Large</option>
            </select>
        </label>

        <!-- Package Weight -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Package Weight</span>
            <select name="package_weight" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required>
                <option value="up-to-10kg">Up to 10 kg</option>
                <option value="10-20kg">10-20 kg</option>
                <option value="20-100kg">20-100 kg</option>
                <option value="100kg-plus">100+ kg</option>
            </select>
        </label>

        <!-- Delivery Instructions -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Delivery Instructions</span>
            <textarea name="delivery_instructions" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter any specific instructions."></textarea>
        </label>

        <!-- Terms and Conditions -->
        <div class="flex mt-6 text-sm">
            <label class="flex items-center dark:text-gray-400">
                <input type="checkbox" name="terms_and_conditions" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required />
                <span class="ml-2">I agree to the <span class="underline">terms and conditions</span></span>
            </label>
        </div>
        <!-- Create Button -->
        <div class="flex mt-6 space-x-4 justify-end">
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-green-700 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                Create Order
            </button>
        </div>
    </div>
</form>
<?php /**PATH D:\SSP_Website_Sem02\Logistics_Management -Web\Logistics_website\resources\views/Userpanel/user_components/order_form.blade.php ENDPATH**/ ?>
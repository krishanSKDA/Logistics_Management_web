<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Customer Details
</h4>
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <!-- Personal Information -->
        <h5 class="mb-4 text-md font-semibold text-gray-600 dark:text-gray-300">Personal Information</h5>

        <!-- Full Name -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Full Name</span>
            <input
                name="customer_name" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Full name" />
        </label>

        <!-- Email Address -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email Address</span>
            <input type="email"
                name="customer_email" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Email address" />
        </label>

        <!-- Phone Number -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Phone Number</span>
            <input type="tel"
                name="customer_phone" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Phone number" />
        </label>

        <!-- Additional Contact Information -->
        <h5 class="mt-6 mb-4 text-md font-semibold text-gray-600 dark:text-gray-300">Additional Contact Information</h5>

        <!-- Alternative Phone Number -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Alternative Phone Number</span>
            <input type="tel"
                name="alternative_phone"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Alternative phone number (optional)" />
        </label>

        <!-- Address Information -->
        <h5 class="mt-6 mb-4 text-md font-semibold text-gray-600 dark:text-gray-300">Address Information</h5>

        <!-- Street Address -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Street Address</span>
            <input
                name="customer_address" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Street address" />
        </label>

        <!-- Billing Address -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Billing Address</span>
            <input
                name="billing_address" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Billing address (optional)" />
        </label>

        <!-- Payment Information -->
        <h5 class="mt-6 mb-4 text-md font-semibold text-gray-600 dark:text-gray-300">Payment Information</h5>

        <!-- Payment Info -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Payment Information</span>
            <input type="text"
                name="payment_info" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Card Number" />
        </label>

        <!-- CRUD Buttons -->
        <div class="flex mt-6 space-x-4 justify-end">
            <button
                type="submit" 
                class="px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-green-700 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                Save Your Data
            </button>
        </div>
    </div>
</form>

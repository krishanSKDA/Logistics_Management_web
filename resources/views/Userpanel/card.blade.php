<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Card 1: Total Shipments -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                </path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Total Shipments
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                1000
            </p>
        </div>
    </div>

    <!-- Card 2: Delivered Orders -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-3.707-3.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Delivered Orders
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                550
            </p>
        </div>
    </div>

    <!-- Card 3: In Transit -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-500">
            <img src="{{ asset('img/transit.svg') }}" alt="Transit Image" class="your-custom-class"
                style="width: 50px; height: auto;">
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Orders In Transit
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                320
            </p>
        </div>
    </div>


    <!-- Card 5: Local Time -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
            <img src="{{ asset('img/clock.svg') }}" alt="Clock Image" style="width: 50px; height: auto;">

        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Local Time
            </p>
            <p id="localTime" class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <!-- Local time will be displayed here -->
            </p>
        </div>
    </div>
</div>

<script>
    function updateTime() {
        const now = new Date();
        document.getElementById('localTime').textContent = now.toLocaleTimeString();
    }

    // Update the time every second
    setInterval(updateTime, 1000);
    // Initialize the time display
    updateTime();
</script>
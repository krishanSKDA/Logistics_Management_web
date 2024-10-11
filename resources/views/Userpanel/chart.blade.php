<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
            Shipment Revenue
        </h4>
        <canvas id="pie"></canvas>
        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
            <!-- Chart legend -->
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                <span>Air Freight</span>
            </div>
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                <span>Sea Freight</span>
            </div>
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                <span>Land Freight</span>
            </div>
        </div>
    </div>
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
            Shipment Traffic
        </h4>
        <canvas id="line"></canvas>
        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
            <!-- Chart legend -->
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                <span>On-Time</span>
            </div>
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                <span>Delayed</span>
            </div>
        </div>
    </div>
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
      Shipments by Region
    </h4>
    <canvas id="region"></canvas>
    <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
      <!-- Chart legend -->
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #EF4444;"></span>
        <span>North</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #F97316;"></span>
        <span>South</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #FBBF24;"></span>
        <span>East</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #10B981;"></span>
        <span>West</span>
      </div>
    </div>
  </div>
  <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
      Performance Metrics
    </h4>
    <canvas id="radar"></canvas>
    <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
      <!-- Chart legend -->
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #1D4ED8;"></span>
        <span>On-Time Deliveries</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #14B8A6;"></span>
        <span>Delayed Deliveries</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #7E22CE;"></span>
        <span>Damaged Shipments</span>
      </div>
      <div class="flex items-center">
        <span class="inline-block w-3 h-3 mr-1" style="background-color: #EF4444;"></span>
        <span>Customer Satisfactions</span>
      </div>
    </div>
  </div>
    
</div>
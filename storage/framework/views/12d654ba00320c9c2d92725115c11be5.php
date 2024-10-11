<script type="text/javascript">
  window.$crisp = [];
  window.CRISP_WEBSITE_ID = "46c1399f-c26f-478b-a8f5-524603fdbec6";
  (function () {
    d = document;
    s = d.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = 1;
    d.getElementsByTagName("head")[0].appendChild(s);
  })();
</script>
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="<?php echo e(route('home')); ?>">
      <img src="<?php echo e(asset('img/userpanel_logo.png')); ?>" alt="Logo" class="h-8 inline-block" />
    </a>

    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
          href="<?php echo e(route('app')); ?>">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
            </path>
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="<?php echo e(route('customer')); ?>">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 4a4 4 0 110 8 4 4 0 010-8zM16 14H8a4 4 0 00-4 4v2h16v-2a4 4 0 00-4-4z" />
          </svg>
          <span class="ml-4">Customer Details</span>
        </a>
      </li>
    </ul>


    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="<?php echo e(route('order')); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 2a2 2 0 00-2 2v2a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H9zM5 8h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10a2 2 0 012-2z" />
          </svg>
          <span class="ml-4">Create Order</span>
        </a>
      </li>

      <!-- <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="<?php echo e(route('shipment')); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 17a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2m0 0H9m0 0a2 2 0 11-4 0m0 0h4m10 0a2 2 0 100-4 2 2 0 000 4z" />
          </svg>
          <span class="ml-4">Shipment</span>
        </a>
      </li>

      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="<?php echo e(route('history')); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 2a2 2 0 00-2 2v2a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H9zM5 8h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10a2 2 0 012-2z" />
          </svg>
          <span class="ml-4">Orders History</span>
        </a>
      </li> -->


      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="<?php echo e(route('feed')); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 10h.01M12 10h.01M16 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-4 2a4 4 0 01-8 0h8z" />
          </svg>
          <span class="ml-4">Feedback</span>
        </a>
      </li>
    </ul>
    <div class="px-6 my-6">
      <button id="customer-support-button"
        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
        Customer Support
        <span class="ml-2" aria-hidden="true">+</span>
      </button>
    </div>
    <div class="px-6 my-6">
    <a href="<?php echo e(route('order-history')); ?>">
        <button id="customer-support-button"
            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
            Order History
            <span class="ml-2" aria-hidden="true">-></span>
        </button>
    </a>
</div>

</aside><?php /**PATH D:\SSP_Website_Sem02\Logistics_Management - Testing\Logistics_website\resources\views/Userpanel/sidebar.blade.php ENDPATH**/ ?>
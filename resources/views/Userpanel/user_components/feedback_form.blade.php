<form action="{{ route('feedback.store') }}" method="POST" id="feedbackForm">
    @csrf
    <!-- Hidden input to identify the form -->
    <input type="hidden" name="form_type" value="feedback_form_2">

    <!-- Customer Name -->
    <label class="block text-sm">
        <span class="text-white dark:text-white">Customer Name</span>
        <input
            name="name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input text-white"
            placeholder="Your name" required />
    </label>

    <!-- Email -->
    <label class="block text-sm">
        <span class="text-white dark:text-white">Email</span>
        <input
            type="email"
            name="email"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input text-white"
            placeholder="Your email" required />
    </label>

    <!-- Date -->
    <label class="block text-sm">
        <span class="text-white dark:text-white">Date</span>
        <input
            type="date"
            name="date"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input text-white"
            required />
    </label>

    <!-- Review -->
    <label class="block text-sm">
        <span class="text-white dark:text-white">Review</span>
        <textarea
            name="review"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-textarea text-white"
            rows="3" placeholder="Your review" required></textarea>
    </label>

    <!-- Additional Details -->
    <label class="block text-sm">
        <span class="text-white dark:text-white">Additional Details</span>
        <textarea
            name="additional_details"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-textarea text-white"
            rows="3" placeholder="Additional details (optional)"></textarea>
    </label>

    <!-- Submit Button -->
    <div class="flex mt-6 space-x-4 justify-end">
        <button type="submit"
            class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-green-700 focus:outline-none">
            Submit Feedback
        </button>
    </div>
</form>

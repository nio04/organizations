@if (session($key))
  <div
    class="absolute top-0 right-0 z-20 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow ring-2 dark:text-gray-400 dark:bg-gray-800"
    id="toast-success" role="alert">
    <div
      class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
      <x-icon.icon class="w-5 h-5" fill="white" icon="success-sm" />
      <span class="sr-only">Check icon</span>
    </div>
    <div class="text-sm font-semibold text-green-500 capitalize ms-3">
      {{ session("success") }}
    </div>
    <button
      class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
      data-dismiss-target="#toast-success" type="button"
      aria-label="Close">
      <span class="sr-only">Close</span>
      <x-icon.icon class="w-5 h-5" fill="white" icon="close" />

    </button>
  </div>
@endif

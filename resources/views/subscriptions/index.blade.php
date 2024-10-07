<x-layouts.layout>

  <x-layouts.container search_route="organizations.index">

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
      <main>
        <div
          class="items-center justify-between block p-4 bg-white border-b border-gray-200 sm:flex dark:bg-gray-800 dark:border-gray-700">
          <div class="relative w-full mb-2 h-28">

            <x-modals.flash />

            <div class="">
              <x-buttons.bread-crumb class="mb-10" />

              <h1 class="text-xl font-semibold text-gray-900 -translate-y-3 sm:text-2xl dark:text-white">All
                Subscriptions : <span class="text-4xl italic text-gray-600">{{ $organization->name }}</span> </h1>
            </div>
            <div class="flex items-center justify-between sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">

              <x-search.search-result />

            </div>
          </div>
        </div>

        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
              <div class="shadow h-80">
                <table
                  class="max-w-full min-w-full overflow-y-scroll divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                  <thead class="sticky top-0 bg-gray-100 dark:bg-gray-700">
                    <tr class="">
                      <th scope="col" class="p-4">

                        <x-forms.checkbox type="all" />

                      </th>
                      <th scope="col"
                        class="flex items-center gap-2 p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        ID

                        <x-layouts.sort sort_route="organizations.index" sortBy="name" :sortDir="$sortDir ?? 'asc'" />
                      </th>
                      <th scope="col"
                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Type
                      </th>
                      <th scope="col"
                        class="flex items-center gap-2 p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Total
                      </th>
                      <th scope="col"
                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Per Amount
                      </th>
                      <th scope="col"
                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Penalty amount
                      </th>
                      <th scope="col"
                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Start From
                      </th>
                      <th scope="col"
                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Actions
                      </th>
                    </tr>
                  </thead>

                  <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                    @foreach ($subscriptions as $subscription)
                    <tr class="h-14 hover:bg-gray-100 dark:hover:bg-gray-700">
                      <td class="w-4 p-4">
                        <x-forms.checkbox type="single" />

                      </td>

                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <a href="#"
                          class="text-base font-semibold text-gray-900 dark:text-white">{{ $subscription->id }}
                        </a>
                      </td>

                      <td class="p-4 text-base font-medium text-gray-900 capitalize whitespace-nowrap dark:text-white">
                        {{ $subscription->type }}</td>

                      <td
                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        {{$subscription->total}}
                      </td>

                      <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="flex gap-1 ">
                          {{ $subscription->per_amount}} <img src="{{ Vite::asset("resources/icons/taka.svg")}}" alt=""
                            class="w-5 h-5">
                        </span>
                      </td>

                      <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="flex gap-1 ">
                          {{ $subscription->penalty_amount}} <img src="{{ Vite::asset("resources/icons/taka.svg")}}"
                            alt="" class="w-5 h-5">
                        </span>
                      </td>

                      <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $subscription->start}}
                      </td>

                      {{-- <td class="flex flex-col gap-2 p-2" id="organizations-actions">
                        <x-buttons.button type="a" href="{{ route('organizations.edit', $organization->id)}}"
                      id="updateProductButton"
                      class="inline-flex items-center px-3 py-2 text-sm text-center text-white bg-primary-700
                      hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600
                      dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      <img src="{{ Vite::asset("resources/icons/edit.svg") }}" alt="" class="w-4 h-4 mr-2">
                      Edit
                      </x-buttons.button>

                      <x-buttons.button type="button" id="delete-organization" data-item-id="{{ $organization->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm text-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                        <img src="{{ Vite::asset("resources/icons/delete.svg")}}" alt="" class="w-4 h-4 mr-2">Delete
                      </x-buttons.button>
                      </td> --}}
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        {{-- delete view --}}
        <x-modals.delete-modal headerTitle="Delete item" typeIcon="warning-icon" formId="delete-organization-form"
          actionConfirmBtn="Yes, I am sure" actionConfirmCancel="No, cancel">Are you sure you want to delete this
          organization?</x-modal>

      </main>
    </div>

  </x-layouts.container>
  </x-layputs.layout>
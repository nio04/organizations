<textarea name="{{ $name }}" id="{{ $id }}" rows="{{ $row }}" col="{{ $col }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(["class"=>"shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 $class"])}}>
{{ $slot }}
</textarea>
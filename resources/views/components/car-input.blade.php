@props(['disabled' => false])

<input 
    type="text" 
    x-data 
    x-mask="a 999 aa 999" 
    placeholder="А 123 АА 777"
    @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>

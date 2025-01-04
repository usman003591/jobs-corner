@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' =>
            'block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer',
        'value' => old($name),
    ];
@endphp
<div class="relative">
    <x-forms.field :$label :$name>
        <input {{ $attributes($defaults) }}>
    </x-forms.field>

</div>

@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-600'
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="flex items-center me-4">
        <input {{ $attributes($defaults) }}>
        <small><span class="pl-3 text-gray-700">{{ $label }}</span></small>
    </div>
</x-forms.field>

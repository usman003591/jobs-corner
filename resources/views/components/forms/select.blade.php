@props(['label', 'name'])

@php
$defaults = [
'id' => $name,
'name' => $name,
'class' => 'bg-transparent border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
dark:focus:ring-blue-500 dark:focus:border-blue-500"',
];
@endphp
<div class="relative">
    <x-forms.field :$label :$name>
        <select {{ $attributes($defaults) }}>
            {{ $slot }}
        </select>
    </x-forms.field>
</div>

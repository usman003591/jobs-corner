@props(['name', 'label'])

<div>
    <label
        class="block text-sm font-medium text-gray-900 dark:text-white"
        for="{{ $name }}">{{ $label }}</label>
</div>

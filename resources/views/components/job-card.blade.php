@props(['job'])
<x-panel class="block text-center max-w-sm">
    <div>
        <a href="">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-blue-600 dark:text-white">
                {{ $job->title }}</h5>
        </a>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $job->employer->name }}</p>
    </div>
    <div class="flex flex-row flex-wrap justify-center space-x-2">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>

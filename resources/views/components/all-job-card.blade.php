@props(['job'])
<x-panel class="flex">

    <x-company-logo :employer="$job->employer"/>
    <div class="pl-10">
        <div>
            <a href="">
                <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 hover:text-blue-600 dark:text-white">
                    {{ $job->title }}</h5>
            </a>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $job->employer->name }}</p>
            <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">{{ $job->salary }}</p>
        </div>
        <div class="flex flex-row flex-wrap justify-start space-x-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag>Backend</x-tag>
            @endforeach
        </div>
    </div>
</x-panel>

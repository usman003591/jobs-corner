<x-layout>
    <x-page-heading>
        Results
    </x-page-heading>

    <div class="flex flex-col flex-wrap justify-center space-y-1">
        @foreach ($jobs as $job)
        <x-all-job-card :$job />
        @endforeach
    </div>
</x-layout>

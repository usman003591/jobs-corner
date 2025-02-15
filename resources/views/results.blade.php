<x-layout>
    <x-page-heading>
        Results
    </x-page-heading>

    @if($jobs)
    <div class="flex flex-col flex-wrap justify-center space-y-1">
        @foreach ($jobs as $job)
        <x-all-job-card :$job />
        @endforeach
    </div>
    @else
    <div class="flex flex-col flex-wrap justify-center space-y-1">
        <small>No jobs found</small>
    </div>
    @endif
</x-layout>

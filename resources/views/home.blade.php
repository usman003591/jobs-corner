<x-layout>
    <div class="space-y-10 w-fit flex flex-col">
        <section>
            <div>
                <x-section-heading>Top Jobs</x-section-heading>
                <div class="flex flex-row flex-wrap justify-center">
                    <x-job-card />
                    <x-job-card />
                    <x-job-card />
                </div>
            </div>
        </section>
        <section>
            <div>
                <x-section-heading>Tags</x-section-heading>
                <div class="flex flex-wrap px-1 space-x-2">
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 2</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                    <x-tag>tag 1</x-tag>
                </div>
            </div>
        </section>
        <section>
            <div>
                <x-section-heading>Jobs List</x-section-heading>
                <div class="flex flex-row flex-wrap justify-center">
                    {{--
                    <x-job-card />
                    <x-job-card />
                    <x-job-card /> --}}
                </div>
            </div>
        </section>
    </div>
</x-layout>

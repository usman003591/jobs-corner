<x-layout>
    <section>
        <h1 class="font-bold text-4xl mb-5">Shape Your Future, Find the Perfect Job</h1>
        <form class="flex items-center max-w-lg mx-auto">
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                </div>
                <input type="text" id="voice-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Your Dream Job" />
                <button type="submit"
                    class="absolute top-0 end-0 p-2.5 text-sm h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Search
                </button>
            </div>
        </form>
    </section>
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
            <div class="mb-10">
                <x-section-heading>Jobs List</x-section-heading>
                <div class="flex flex-col flex-wrap justify-center space-y-1">
                    <x-all-job-card></x-all-job-card>
                    <x-all-job-card></x-all-job-card>
                </div>
            </div>
        </section>
    </div>
</x-layout>
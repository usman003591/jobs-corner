<x-layout>
    <x-page-heading>
        Create a new Job
    </x-page-heading>
    <x-forms.form>
        <x-forms.input label="Title" name="title" placeholder="e.g., Software Engineer"/>
        <x-forms.input label="Description" name="description" placeholder="Job description" />
        <x-forms.input label="Location" name="location" placeholder="e.g., Islamabad"/>
        <x-forms.input label="Salary" name="salary" placeholder="e.g., PKR. 100,000"/>
        <x-forms.select label="Position" name="position">
            <option selected disabled hidden>Select Position</option>
            <option>Full-Time</option>
            <option>Part-Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="e.g., https://microsoft.com/careers/seo"/>
        <x-forms.input label="Tags (commas separated)" name="tags" placeholder="e.g., HTML, CSS, JS"/>
        <x-forms.checkbox label="Get this job post featured now" name="is_featured" />
        <div class="text-right">
        <x-forms.button>Post</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>

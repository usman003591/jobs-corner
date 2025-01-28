<x-layout>
    <x-page-heading>Register</x-page-heading>
    <div style="width: 20%">
        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.input label="Name" name="name" />
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />
            <x-forms.divider />

            <x-forms.input label="Employer Name" name="employer" />
            <x-forms.input label="Employer Email" name="email" />
            <x-forms.input label="Employer Address" name="address" />
            <x-forms.input label="Employer Contact" name="contact" />
            <input
                class="block mb-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                label="Employer Logo" name="logo" type="file" aria-describedby="file_input_help" id="file_input"/>
            <div class="text-gray-600 text-sm mb-6">Already have an account? <span><a href="/login"
                        class="text-gray-900 font-semibold hover:text-gray-800 hover:underline">Login</a></span></div>
            <div class="text-right">
                <x-forms.button>Create Account</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>

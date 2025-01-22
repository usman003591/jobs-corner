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
            <x-forms.input label="Employer Logo" name="logo" type="file" />
            <small class="text-gray-600">Already have an account? <span><a href="/login"
                        class="text-blue-600 font-semibold hover:text-blue-900">Login</a></span></small>
            <div class="text-right">
                <x-forms.button>Create Account</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>

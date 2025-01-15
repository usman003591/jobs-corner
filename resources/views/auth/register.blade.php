<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />
        <x-forms.divider/>

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Email" name="email" />
        <x-forms.input label="Employer Address" name="address" />
        <x-forms.input label="Employer Contact" name="contact" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />
        <div class="text-right">
            <x-forms.button>Create Account</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>

<x-layout>
        <x-page-heading>
            <div style="margin-top: 12rem">Register</div>
        </x-page-heading>
        <div style="width: 20%">

            <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
                <x-forms.input label="Email" name="email" type="email" />
                <x-forms.input label="Password" name="password" type="password" />

                <div class="text-right">
                    <x-forms.button>Login</x-forms.button>
                </div>
            </x-forms.form>
        </div>

</x-layout>

<x-layout>
        <x-page-heading>
            <div style="margin-top: 12rem">Login</div>
        </x-page-heading>
        <div style="width: 20%">

            <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
                <x-forms.input label="Email" name="email" type="email" />
                <x-forms.input label="Password" name="password" type="password" />
                <small>Don't have an account? <span><a href="/register" class="text-blue-600 font-semibold hover:text-blue-900">Register</a></span></small>

                <div class="text-right">
                    <x-forms.button>Login</x-forms.button>
                </div>
            </x-forms.form>
        </div>

</x-layout>

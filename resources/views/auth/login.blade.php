<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs Corner</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="flex flex-col bg-gray-50 items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <a href="/login" class="flex items-center pl-5 justify-center mb-12 text-2xl font-semibold lg:mb-10 dark:text-white">
            <img src="{{ Vite::asset('resources/images/logo_light_1.png') }}" class="mr-4 h-32" alt="Jobs Corner Logo">
            {{-- <span>Jobs Corner</span> --}}
        </a>
        <div class="w-full max-w-xl sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <x-page-heading class="">
                <div class="text-center text-3xl">Login</div>
            </x-page-heading>
            {{-- <div style="width: 25%"> --}}

                <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
                    <x-forms.input label="Email" name="email" type="email" />
                    <x-forms.input label="Password" name="password" type="password" />
                    <small>Don't have an account? <span><a href="/register"
                                class="text-blue-600 font-semibold hover:text-blue-900">Register</a></span></small>

                    <div class="text-right">
                        <x-forms.button>Login</x-forms.button>
                    </div>
                </x-forms.form>
                {{--
            </div> --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>

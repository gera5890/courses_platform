<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->


            <!-- Page Content -->
                    <div class="container py-8 grid grid-cols-5">
                        <aside>
                            <h1 class="font-bold text-lg mb-4">Edici&oacute;n del curso</h1>
                            <ul class="text-sm text-gray-600">
                                <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit', $course) border-indigo-500 @else border-transparent @endif pl-2 ">
                                    <a href="{{ route('instructor.courses.edit', $course) }}">Informaci&oacute;n del curso</a>
                                </li>
                                <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum', $course) border-indigo-500 @else border-transparent @endif pl-2 ">
                                    <a href="{{ route('instructor.courses.curriculum', $course) }}">Lecciones del curso</a>
                                </li>
                                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2 ">
                                    <a href="">Metas del curso</a>
                                </li>
                                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2 ">
                                    <a href="">Estudiantes</a>
                                </li>
                            </ul>
                        </aside>
                        <div class="col-span-4 card">
                            <main class="card-body text-gray-700">

                                {{ $slot }}
                            </main>
                        </div>
                    </div>

                    <x-slot name="js">
                        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

                        <script>
                            document.getElementById("title").addEventListener('keyup', slugChange);

                            function slugChange() {
                                title = document.getElementById("title").value;
                                document.getElementById("slug").value = slug(title);
                            }

                            function slug(str) {
                                var $slug = '';
                                var trimmed = str.trim(str);
                                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                                replace(/-+/g, '-').
                                replace(/^-|-$/g, '');
                                return $slug.toLowerCase();
                            }

                            //ckeditor

                            ClassicEditor
                                .create(document.querySelector('#description'), {
                                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote'],
                                    heading: {
                                        options: [{
                                                model: 'paragraph',
                                                title: 'Paragraph',
                                                class: 'ck-heading_paragraph'
                                            },
                                            {
                                                model: 'heading1',
                                                view: 'h1',
                                                title: 'Heading 1',
                                                class: 'ck-heading_heading1'
                                            },
                                            {
                                                model: 'heading2',
                                                view: 'h2',
                                                title: 'Heading 2',
                                                class: 'ck-heading_heading2'
                                            }
                                        ]
                                    }
                                })
                                .catch(error => {
                                    console.log(error);
                                });

                                //Cambiar imagen
                                document.getElementById("file").addEventListener('change', cambiarImagen);

                                function cambiarImagen(event){
                                    var file = event.target.files[0];

                                    var reader = new FileReader();
                                    reader.onload = (event) => {
                                        document.getElementById("picture").setAttribute('src', event.target.result);
                                    };
                                    reader.readAsDataURL(file);
                                }
                        </script>
                    </x-slot>

        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
            {{ $js }}
        @endisset

    </body>
</html>

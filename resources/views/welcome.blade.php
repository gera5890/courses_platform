<x-app-layout>
    <!--Portada principal-->
    <section class="bg-cover bg-center" style="background-image: url({{ asset('img/home/college.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-bold text-5xl">
                    Una nueva perspectiva de aprendizaje
                </h1>
                <p class="text-black font-bold text-2xl mt-4">
                    Aprende naturalmente, habla naturalmente. <br> No te quedes fuera
                </p>

                @livewire('search')
            </div>
        </div>
    </section>
    <!--Seccion del contenido-->
    <section class="mt-24">
        <h1 class="text-gray-500 text-center text-3xl mb-6">
            CONTENIDO
        </h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article class="shadow-md shadow-gray rounded-xl">
                <figure><img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/cursos.jpg') }}"
                        alt=""></figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos/ Talleres/ Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perferendis, debitis amet voluptas
                    omnis ut quam nemo non sequi aperiam?
                </p>
            </article>

            <article class="shadow-md shadow-gray rounded-xl">
                <figure><img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/idiomas.jpg') }}"
                        alt=""></figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Idiomas</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perferendis, debitis amet voluptas
                    omnis ut quam nemo non sequi aperiam?
                </p>
            </article>

            <article class="shadow-md shadow-gray rounded-xl">
                <figure><img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/conocer.jpg') }}"
                        alt=""></figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Conocer</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perferendis, debitis amet voluptas
                    omnis ut quam nemo non sequi aperiam?
                </p>
            </article>

            <article class="shadow-md shadow-gray rounded-xl">
                <figure><img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/conocer.jpg') }}"
                        alt=""></figure>
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700">Acerca de nosotros</h1>
                        </header>
                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perferendis, debitis amet voluptas omnis ut quam nemo non sequi aperiam?
                        </p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 rounded-lg border-black shadow-lg shadow-black py-12">
        <h1 class="text-center text-white text-3xl">
            ¿No sabes qu&eacute; curso llevar?
        </h1>
        <p class="text-center text-white text-1xl">
            Dir&iacute;gete al cat&aacute;logo y filtralos por categor&iacute;a o nivel
        </p>

        <!-- component -->
    <!-- component -->
    <div class="flex justify-center mt-4">
        <a href="{{ route('courses.index') }}" class="text-center text-lg bg-white p-3 rounded-lg shadow-lg shadow-black hover:bg-red-400
         hover:text-white transition-all duration-500">
            C&aacute;talogo de cursos
        </a>
    </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-gray-700 text-3xl mb-6">&Uacute;LTIMOS CURSOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>
</x-app-layout>

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

                <div class="pt-2 relative mx-auto text-gray-600 mt-2">
                    <input
                        class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                            y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
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
                <article class="bg-white shadow rounded-sm overflow-hidden">
                    <img src="{{Storage::url($course->image->url) }}" alt="" class="h-32 w-full object-cover" width="640" height="400">
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{ Str::limit($course->title, 40, '...')}}</h1>
                        <p class="text-gray-700">
                            Prof: {{ $course->teacher->name }}
                        </p>
                        <div class="flex">

                            <ul class="flex text-sm">
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                            </ul>
                            <p class="text-sm text-gray-500">
                                <i class="fas fa-users ml-auto"></i>
                                ({{ $course->students_count }})
                            </p>
                        </div>

                        <a href="{{ route('courses.show', $course) }}" class="flex justify-center text-lg bg-blue-500 p-3 rounded-lg shadow-sm shadow-black hover:bg-red-400
                        hover:text-white transition-all duration-500 w-full mt-4">
                            M&aacute;s informaci&oacute;n
                        </a>

                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>

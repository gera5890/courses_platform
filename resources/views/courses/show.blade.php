<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{ Storage::url($course->image->url) }}" alt="">
            </figure>

            <div class="text-white">
                <h1 class="text-3xl">{{ $course->title }}</h1>
                <h2 class="text-xl mb-3">{{ $course->subtitle }}</h2>
                <p class="mb-2"><i class="fas fa-chart-line mr-2"></i>Categoria: {{ $course->category->name }}</p>
                <p class="mb-2"><i class=""></i>Nivel: {{ $course->level->name }}</p>
                <p class="mb-2"><i class="fas fa-user mr-2"></i>Matriculados: {{ $course->students_count }}</p>
                <p class="mb-2"><i class="fas fa-star mr-2"></i>Calificacion: {{ $course->rating }}</p>
            </div>

        </div>
    </section>

    <div class="container grid grid-cols-3 gap-6">
        <div class="col-span-2">
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que aprenderas</h1>
                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{ $goal->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="">
                <h1 class="text-3xl font-bold mb-2">Temario</h1>
                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow"
                    @if ($loop->first)
                    x-data="{ open: true}"
                        @else
                        x-data="{ open:false}"
                    @endif>
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click=" open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
                        </header>
                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class="fas fa-play-circle text-gray-600 mr-2"></i>{{ $lesson->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>
            <section class="mb-12">
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Requisitos</h1>

                <ul class="list-disc list-inside">
                    @foreach ($course->requirements as $requirement)
                        <li class="text-gray-700 text-base">
                            {{ $requirement->name }}
                        </li>
                    @endforeach
                </ul>
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Descripci&oacute;n</h1>
                <div class="text-gray-700 text-base">
                    {{ $course->description }}
                </div>
            </section>
        </div>
        <div class="">
            <section class="card">
                <div class="card-body">
                    <div class="flex">
                        <img src="{{ $course->teacher->profile_photo_url }}" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-app-layout>

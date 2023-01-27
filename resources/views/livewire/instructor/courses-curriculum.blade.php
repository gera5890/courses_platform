<div>
    {{-- The Master doesn't talk, he acts. --}}
    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>
    <h1 class="text-2xl font-bold">
        Lecciones del curso
    </h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->sections as $item)
        <article class="card mb-6">
            <div class="card-body bg-gray-200">
                <header>
                    <h1 class="cursor-pointer">
                        <strong>Secci&oacuten: </strong>{{ $item->name }}
                    </h1>
                </header>
            </div>
        </article>
    @endforeach

</div>

<div class="mt-8">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="embed-responsive">
                {!! $current->iframe !!}
            </div>
            <h1 class="text-3xl font-bold text-gray-600 mt-4">
                {{ $current->name }}
            </h1>
                @if ($current->description)
                    <div class="text-gray-600">
                        {{ $current->description->name }}
                    </div>
                @endif
            <div class="flex items-center mt-4 cursor-pointer">
                <i class="fas fa-toggle-off text-gray-600 text-2xl"></i>
                <p class="text-sm ml-2">Marcar esta la unidad como culminada</p>
            </div>

            <div class="card mt-2 hover:translate-y-0">
                <div class="card-body flex text-gray-600">
                    @if ($this->previous)
                    <a wire:click="changeLesson({{ $this->previous }})" class="cursor-pointer hover:text-black hover:underline duration-500">Tema anterior</a>
                    @endif
                    @if ($this->next)
                    <a wire:click="changeLesson({{ $this->next }})" class="ml-auto cursor-pointer hover:text-black hover:underline duration-500">Siguiente tema</a>
                    @endif
                </div>
            </div>
            <p>
                Indice: {{ $this->index }}
            </p>
            <p>
                Prevoius: @if ($this->previous)
                {{ $this->previous->id }}
                @endif
            </p>
            <p>
                Next: @if ($this->next)
                {{ $this->next->id }}
                @endif
            </p>
        </div>
        <div class="card">
            <div class="card-body">
                <h1>{{ $course->title }}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="rounded-full" src="{{ $course->teacher->profile_photo_url }}" alt="">
                    </figure>
                    <div>
                        <p>
                            {{ $course->teacher->name }}
                        </p>
                        <a class="text-blue-400" href="">{{'@' . Str::slug($course->teacher->name, '') }}</a>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a href="" class="font-bold">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <a wire:click="changeLesson({{ $lesson }})" class="cursor-pointer">
                                            {{ $lesson->name }} @if ($lesson->completed)
                                                (completado)
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mt-8">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
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
            <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">
                @if ($current->completed)
                <i class="fas fa-toggle-on text-green-600 text-2xl"></i>
                <p class="text-sm ml-2">Unidad culminada</p>
                @else
                    <i class="fas fa-toggle-off text-gray-600 text-2xl"></i>
                    <p class="text-sm ml-2">Marcar esta la unidad como culminada</p>
                @endif
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
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{ $course->title }}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="rounded-full w-12 h-12 object-cover mr-4" src="{{ $course->teacher->profile_photo_url }}" alt="">
                    </figure>
                    <div>
                        <p>
                            {{ $course->teacher->name }}
                        </p>
                        <a class="text-blue-400 text-sm" href="">{{'@' . Str::slug($course->teacher->name, '') }}</a>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-4">
                    {{ $this->advance . '% completado' }}
                </p>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-300">
                      <div style="width:{{ $this->advance . '%' }}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-600 transition-all duration-500"></div>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-4">
                            <a href="" class="font-bold text-base inline-block mb-2">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li class="flex">
                                        <div>
                                            @if ($lesson->completed)
                                                @if ($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-4 border-green-400 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-green-600 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @else
                                                @if ($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-4 border-gray-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @endif
                                        </div>
                                        <a wire:click="changeLesson({{ $lesson }})" class="cursor-pointer">
                                            {{ $lesson->name }}
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

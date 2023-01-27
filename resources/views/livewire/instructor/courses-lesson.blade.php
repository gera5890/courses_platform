<div>
   @foreach ($section->lessons as $item)
    <article class="card mt-4">
        <div class="card-body">
            @if ($lesson->id == $item->id)
                <form wire:submit.prevent="update">
                    <div class="flex items-center">
                        <label class="w-32">
                            Nombre:
                        </label>
                        <input wire:model="lesson.name" class="form-input w-full">
                    </div>
                    @error('lesson.name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex items-center mt-4">
                        <label class="w-32">
                            Plataforma:
                        </label>
                        <select wire:model="lesson.platform_id" class="w-full p-3 mt-2 mb-4 bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                            @foreach ($platforms as $platform)
                                <option value="{{ $platform->id }}">
                                    {{ $platform->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center mt-4">
                        <label class="w-32">
                            URL:
                        </label>
                        <input wire:model="lesson.url" class="form-input w-full">
                    </div>
                    @error('lesson.url')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="mt-4 flex justify-end">
                        <button type="button" class="justify-center text-center text-sm bg-red-500 p-3 rounded-lg shadow-md shadow-black hover:bg-red-600
                    hover:text-white transition-all duration-500 mr-2" wire:click="cancel">
                        Cancelar
                    </button>
                    <button type="submit" class="justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                    hover:text-white transition-all duration-500" >
                        Actualizar
                    </button>
                    </div>

                </form>
            @else
            <header>
                <h1>
                    <i class="far fa-play-circle text-blue-500 mr-1"></i>
                    Lección: {{ $item->name }}
                </h1>
            </header>
            <div>
                <hr class="my-2">
                <p class="text-sm">
                    Plataforma: {{ $item->platform->name }}
                </p>
                <p class="text-sm">
                    Enlace <a class="text-blue-600" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a>
                </p>
                <div class="my-2">
                    <button class="justify-center text-center text-sm bg-red-500 p-3 rounded-lg shadow-md shadow-black hover:bg-red-600
                    hover:text-white transition-all duration-500 mr-2"  wire:click="edit({{ $item }})">
                        Editar
                    </button>
                    <button class="justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                    hover:text-white transition-all duration-500" wire:click="destroy({{ $item }})">
                        Eliminar
                    </button>
                </div>

                <div>
                    @livewire('instructor.lesson-description',['lesson' => $item], key($item->id))
                </div>
            </div>
            @endif
        </div>
    </article>
   @endforeach

   <div class="mt-4" x-data="{open:false}">
    <a x-show="!open" x-on:click="open = true" class="flex item-center cursor-pointer mb-6">
        <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
        Agregar nueva lección
    </a>
    <article class="card" x-show="open">
        <div class="card-body bg-white">
            <h1 class="text-xl font-bold mb-4">Agregar nueva lección</h1>
            <div>
                <div class="flex items-center">
                    <label class="w-32">
                        Nombre:
                    </label>
                    <input wire:model="name" class="form-input w-full">
                </div>

                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex items-center mt-4">
                    <label class="w-32">
                        Plataforma:
                    </label>
                    <select wire:model="platform_id" class="w-full p-3 mt-2 mb-4 bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        @foreach ($platforms as $platform)
                            <option value="{{ $platform->id }}">
                                {{ $platform->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @error('platform_id')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex items-center mt-4">
                    <label class="w-32">
                        URL:
                    </label>
                    <input wire:model="url" class="form-input w-full">
                </div>
                @error('url')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            <div class="flex justify-end mt-4" >
                <button class="justify-center text-center text-lg bg-red-500 p-3 rounded-lg shadow-md shadow-black hover:bg-red-600
                hover:text-white transition-all duration-500 mr-2" x-on:click="open = false">
                    Cancelar
                </button>
                <button class="justify-center text-center text-lg bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                hover:text-white transition-all duration-500" wire:click="store">
                    Agregar
                </button>


            </div>
        </div>
    </article>
</div>
</div>

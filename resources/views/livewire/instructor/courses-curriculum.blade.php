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

                @if ($section->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" class="form-input w-full" placeholder="Ingrese el nombre de la sección">
                        @error('section.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                <header class="flex justify-between items-center">
                    <h1 class="cursor-pointer">
                        <strong>Secci&oacuten: </strong>{{ $item->name }}
                    </h1>
                    <div>
                        <i class="fas fa-edit cursor-pointer text-green-600" wire:click="edit({{ $item }})"></i>
                        <i class="fas fa-eraser cursor-pointer text-red-500" wire:click="destroy({{ $item }})"></i>
                    </div>
                </header>

                <div class="mt-4">
                    @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                </div>

                @endif
            </div>
        </article>
    @endforeach

    <div x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true" class="flex item-center cursor-pointer mb-6">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva sección
        </a>
        <article class="card" x-show="open">
            <div class="card-body bg-gray-200">
                <h1 class="text-xl font-bold mb-4">Agregar nueva sección</h1>
                <div>
                    <input wire:model="name" class="form-input w-full" placeholder="Escriba el nombre de la sección">
                </div>
                @error('name')
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

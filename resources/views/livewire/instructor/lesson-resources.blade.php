<div class="card" x-data="{open : false}">
    <div class="card-body bg-gray-200">
        <header>
            <h1 x-on:click="open = !open" class="cursor-pointer">
                Recursos de la lección
            </h1>
        </header>

        <div x-show="open">
            <hr class="my-2">

     @if ($lesson->resource)
        <div class="flex justify-between items-center">
            <p>
                <i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>{{ $lesson->resource->url }}
            </p>
            <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
        </div>
     @else
     <form wire:submit.prevent="save">
        <div class="flex items-center">
            <input wire:model="file" type="file" class="form-input flex-1">
            <button
                class=" ml-2 justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                    hover:text-white transition-all duration-500">
                Guardar
            </button>
        </div>

        <div class="text-blue-500 font-bold mt-1" wire:loading wire:target="file">
            Cargando ...
        </div>

        @error('file')
           <span class="text-sm text-red-500"> {{ $message }}</span>
        @enderror
    </form>
     @endif
        </div>
    </div>
</div>
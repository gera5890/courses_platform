<div>
   <article class="card" x-data="{open:false}">
        <div class="card-body bg-gray-200">
            <header>
                <h1 class="cursor-pointer" x-on:click="open = !open">Descripción de la lección</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">

                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>

                        @error('description.name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="justify-center text-center text-sm bg-red-500 p-3 rounded-lg shadow-md shadow-black hover:bg-red-600
                        hover:text-white transition-all duration-500 mr-2" wire:click="destroy">
                            Eliminar
                        </button>
                        <button type="submit" class="justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                        hover:text-white transition-all duration-500" >
                            Actualizar
                        </button>
                        </div>
                    </form>
                @else
                <div>
                    <textarea placeholder="Agregue una descripción de la lección" wire:model="name" class="form-input w-full"></textarea>

                    @error('name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="mt-4 flex justify-end">

                    <button wire:click="store" class="justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                    hover:text-white transition-all duration-500" >
                        Agregar
                    </button>
                    </div>
                </div>
                @endif

            </div>

        </div>
   </article>
</div>

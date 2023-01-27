<section>
    <h1 class="text-2xl font-bold">
        METAS DEL CURSO
    </h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->goals as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-200">
                @if ($goal->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="goal.name" class="form-input w-full">

                        @error('goal.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                <header class="flex justify-between">
                    <h1>{{ $item->name }}</h1>

                   <div>
                    <i wire:click="edit({{ $item }})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                    <i wire:click="destroy({{ $item }})" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                   </div>
                </header>
                @endif
            </div>
        </article>
    @endforeach

    <article class="card">
        <div class="card-body bg-gray-200">
            <form wire:submit.prevent="store">
                <input wire:model="name" class="form-input w-full" placeholder="Agregar el nombre de la meta">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
                <div class="flex justify-end mt-2">
                    <button type="submit" class="justify-center text-center text-sm bg-green-500 p-3 rounded-lg shadow-md shadow-black hover:bg-green-700
                        hover:text-white transition-all duration-500" >
                            Agregar meta
                        </button>
                </div>
            </form>
        </div>
    </article>
</section>

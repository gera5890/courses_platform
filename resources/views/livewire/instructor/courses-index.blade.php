<div class="container py-8">
    <x-table-responsive>

        <div class="px-6 py-4 flex">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso">
            <a class="bg-red-500 text-center font-semibold text-white p-2 rounded-md border border-black ml-2" href="{{ route('instructor.courses.create') }}">Crear nuevo curso</a>
        </div>
        @if($courses->count())

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Matriculados
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Calificaci&oacute;n
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        status
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($courses as $course)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    @isset($course->image)
                                    <img class="w-full h-full rounded-full object-cover object-center"
                                    src="{{ Storage::url($course->image->url) }}" alt="" />
                                    @else
                                    <img class="w-full h-full rounded-full object-cover object-center"
                                        src="https://becas.news/wp-content/uploads/UPVM.webp" alt="" />
                                    @endisset
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $course->title }}
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        {{ $course->category->name }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $course->students->count() }}</p>
                            <p class="text-sm text-gray-500">Alumnos matriculados</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                            <div class="flex items-center">

                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $course->rating }}
                                </p>
                                <ul class="flex text-sm ml-2">
                                    <li class="mr-1">
                                        <i
                                            class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i
                                            class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i
                                            class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i
                                            class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i
                                            class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="text-gray-500 whitespace-no-wrap">
                                Valoraciones del curso
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            @switch($course->status)
                                @case(1)
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-red-500 opacity-50 rounded-full"></span>
                                        <span class="relative">Borrador</span>
                                    </span>
                                @break

                                @case(2)
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-yellow-600 opacity-50 rounded-full"></span>
                                        <span class="relative">Revisi&oacute;n</span>
                                    </span>
                                @break

                                @case(3)
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-green-500 opacity-50 rounded-full"></span>
                                        <span class="relative">Activo</span>
                                    </span>
                                @break

                                @default
                            @endswitch
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('instructor.courses.edit', $course) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="px-6 py-4">
            {{ $courses->links() }}
        </div>
        @else
        <div class="px-6 py-4">
            No coincide ning&uacute;n registro que coincida
        </div>


        @endif
    </x-table-responsive>
</div>

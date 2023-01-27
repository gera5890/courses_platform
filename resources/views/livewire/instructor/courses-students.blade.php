<div>
    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>

    <h1 class="text-2xl font-bold mb-4">
        ESTUDIANTES DEL CURSO
    </h1>
    <x-table-responsive>

        <div class="px-6 py-4">
            <input wire:model="search" wire:model="search" class="w-full form-input flex-1 shadow-sm" placeholder="Ingrese el nombre del estudiante">
        </div>
        @if($students->count())

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($students as $student)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full object-cover object-center"
                                    src="{{ $student->profile_photo_url }}" alt="" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $student->name }}
                                    </p>

                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $student->email }}</p>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="px-6 py-4">
            {{ $students->links() }}
        </div>
        @else
        <div class="px-6 py-4">
            No coincide ning&uacute;n registro que coincida
        </div>


        @endif
    </x-table-responsive>
</div>

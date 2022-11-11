@props(['course'])

<article class="bg-white shadow rounded-sm overflow-hidden transform hover:-translate-y-3 duration-700 hover:shadow-black">
    <img src="{{Storage::url($course->image->url) }}" alt="" class="h-32 w-full object-cover" width="640" height="400">
    <div class="px-6 py-4">
        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{ Str::limit($course->title, 40, '...')}}</h1>
        <p class="text-gray-700">
            Prof: {{ $course->teacher->name }}
        </p>
        <div class="flex">

            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                </li>
            </ul>
            <p class="text-sm text-gray-500">
                <i class="fas fa-users ml-auto"></i>
                ({{ $course->students_count }})
            </p>
        </div>

        <a href="{{ route('courses.show', $course) }}" class="flex justify-center text-lg bg-blue-500 p-3 rounded-lg shadow-sm shadow-black hover:bg-blue-700
        hover:text-white transition-all duration-500 w-full mt-4">
            M&aacute;s informaci&oacute;n
        </a>

    </div>
</article>

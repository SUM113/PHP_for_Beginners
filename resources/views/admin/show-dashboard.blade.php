<x-layout>
    <section>

        <div class="mt-10 p-6 px-0 border-solid border-4 border-gray-200 rounded-xl">
            <table class=" w-full min-w-max table-auto text-left">
                <thead class="bg-blue-400 ">
                <tr>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Post:Title
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Author
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>

                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Status
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Published Date
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions</p>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="hover:bg-gray-100">
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{ucwords($post->slug)}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/60?u={{$post->user->id}}" alt="Laurent Perrier" class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                <div class="flex flex-col">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{ucwords($post->user->name)}}</p>
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">{{ucwords($post->user->email)}}</p>
                                </div>
                            </div>
                        </td>

                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="w-max">
                                <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500 text-white py-1 px-2 text-xs rounded-md rounded-xl" style="opacity: 1;">
                                    <span class="">Published</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                {{$post->created_at->format("F j, Y, g:i a")}}</p>
                        </td>
                        <td class=" border-b border-blue-gray-50">
                            <a href="/posts/{{$post->slug}}" class="mb-3">View</a>
                            <a href="/admin/delete/record/{{$post->id}}" class="mb-3">Delete</a>
                            <a href="/admin/edit/{{$post->id}}" class="mb-3">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </section>
</x-layout>

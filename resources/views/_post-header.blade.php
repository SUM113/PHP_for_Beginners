<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>




    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

            <x-dropdown>

                <x-slot name="trigger">
                    <button @click= "show = !show"  class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">
                        {{isset($category_selected) ? ucwords($category_selected->name) : 'Categories'}}

                        <x-icon name="downArrow" class="absolute pointer-events-none text-bold"/>

                    </button>
                </x-slot>
{{--                {{dd(request()->routeIs('home') ?? false)}}--}}
                <x-dropdownItem href="/" active=" request()->routeIs('home')??false">All</x-dropdownItem>
                @foreach($categories as $category)
                    <x-dropdownItem href="/?category={{$category->slug}}"
                                    :active="isset($category_selected) && $category_selected->is($category)"
                    >{{$category->name. "\n"}}

                        @endforeach


                    </x-dropdownItem>

            </x-dropdown>

        </div>


        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input
                    type="text"
                    name="search"
                    placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>

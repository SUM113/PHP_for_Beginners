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
        <x-dropdownItem href="/?category={{$category->slug}}&{{http_build_query(request()->except('category'))}}"
                        :active="isset($category_selected) && $category_selected->is($category)"
                        >{{$category->name}}

        </x-dropdownItem>
    @endforeach
</x-dropdown>

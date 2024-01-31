
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

<div class="max-w-lg mx-auto">

    <button class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">Menu<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

    <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
        <div class="px-4 py-3">
            <span class="block text-sm">{{auth()->user()->name}}</span>
            <span class="block text-sm font-medium text-gray-900 truncate">{{auth()->user()->email}}</span>
        </div>
        <ul class="py-1" aria-labelledby="dropdown">


                @if(auth()->user()->name==='Sajadul mulk')
                <li>
                    <a href="/admin/dashboard" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>

                <li>
                    <a href="/WritePosts/create" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Create Blog Post</a>
                </li>
                @endif
            <li>
                <a href="/logout" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
            </li>
        </ul>
    </div>

</div>


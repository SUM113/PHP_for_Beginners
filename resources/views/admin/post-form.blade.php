<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Creat A Blog Post!</h1>

            <form method="post" action="/admin/post/store" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           type="text"
                           name="title"
                           id="title"
                           value="{{old('title')}}"
                           required
                    >
                    @error('title')
                    <div class="text-red-400 text-sm">{{'*'.$message}}</div>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="slug"
                    >
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           type="text"
                           name="slug"
                           id="slug"
                           value="{{old('slug')}}"
                           required
                    >
                    @error('slug')
                    <div class="text-red-400 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt"
                    >
                        Excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           type="text"
                           name="excerpt"
                           id="excerpt"
                           value="{{old('excerpt')}}"
                           required
                    >
                    @error('excerpt')
                    <div class="text-red-400 text-sm">{{$message}}</div>
                    @enderror
                </div><div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="thumbnail"
                    >
                        Thumbnail for Blog Post
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           type="file"
                           name="thumbnail"
                           id="thumbnail"
                           value="{{old('thumbnail')}}"
                           required
                    >
                    @error('thumbnail')
                    <div class="text-red-400 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="body"
                    >
                        Body
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full h-full rounded-xl font-semibold"
                              type="text"
                              rows="8"
                              cols="60"
                              name="body"
                              id="body"
                              placeholder="Write Your Blog here.."
                              value="{{old('body')}}"
                              required
                    ></textarea>


                    @error('body')
                    <div class="text-red-400 text-sm">{{$message}}</div>
                    @enderror
                </div>
                @php
                    $category=\App\Models\Category::all();

                @endphp
             <div class="mb-3">
                 <label for="category_id">Select A Category:</label>

                 <select name="category_id" id="category_id">
                     @foreach($category as $cat )
                         <option value="{{$cat->id}}">{{$cat->name}}</option>
                     @endforeach
                 </select>
             </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit
                    </button>
                </div>

            </form>
            @error('submit')
            <div class="text-red-400 text-sm">{{$message}}</div>
            @enderror
        </main>

    </section>


</x-layout>

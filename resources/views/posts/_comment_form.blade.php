<section class="col-span-8 col-start-5 mt-10 px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

        <form method="get" action="/postsComment/{{$posts->id}}">
            @csrf
            <div class="mb-1 ">
                <div class=" items-center mb-2 font-bold text-xs">
                    <img src="https://i.pravatar.cc/60?u={{$posts->user->id}}"
                         alt=""
                         width="60"
                         height="60"
                         class="mb-2 rounded-xl"
                    >
                    Want to Participate
                </div>
                <textarea class="border border-gray-400 p-2 w-full h-full rounded-xl font-semibold"
                          type="text"
                          rows="6"
                          cols="50"
                          name="post_comment"
                          id="post_comment"
                          placeholder="Your thought...!!"
                          value="{{old('post_comment')}}"
                          required
                ></textarea>
                @error('post_comment')
                <div class="text-red-400 text-sm">{{'*'.$message}}</div>
                @enderror

            </div>
            <div>
                <button type="submit"
                        class="flex  bg-blue-400 text-white rounded-xl py-2 px-4 hover:bg-blue-600 "

                >
                    Post
                </button>
            </div>
        </form>
    </main>

</section>

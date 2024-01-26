<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src={{asset('/images/illustration-1.png')}} alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{$posts->created_at->diffForHumans()}}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src={{asset('/images/lary-avatar.svg')}} >
                        <div class="ml-3 text-left">
                            <a href="/?user={{$posts->user->name}}">
                                <h5 class="font-bold">{{$posts->user->name}}</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$posts->category"/>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">

                        {{$posts->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>{{$posts->body}}</p>
                    </div>




                    <section class="col-span-8 col-start-5 mt-10 px-6 py-8">
                        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

                            <form method="post" action="/postsComment/{{$posts->id}}">
                                @csrf
                                <div class="mb-1 ">
                                    <div class=" items-center mb-2 font-bold text-xs">
                                        <img src="https://i.pravatar.cc/60" alt="" width="60" height="60" class="mb-2 rounded-xl">
                                        Want to Participate
                                    </div>
                                    <textarea class="border border-gray-400 p-2 w-full h-full rounded-xl text-xs"
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
                                <div >
                                    <button type="submit"
                                            class="flex  bg-blue-400 text-white rounded-xl py-2 px-4 hover:bg-blue-600 "
                                    >
                                        Post
                                    </button>
                                </div>
                            </form>
                        </main>

                    </section>

                </div>

                <section class="col-span-8 col-start-5 mt-10 space-y-6">


                    @if(count($posts->comments)>0)
                        @foreach($posts->comments as $comment)
                            <x-post-comment :comment="$comment"/>
                        @endforeach
                    @else
                        <p>
                            Not Comments for this Post yet!!!!
                        </p>
                    @endif


                </section>
            </article>

        </main>


    </section>


    {{--    <h1>--}}
    {{--        {!! $posts->title !!}--}}
    {{--    </h1>--}}
    {{--    <div>--}}
    {{--        From--}}
    {{--        <a href="/postsBy/{{$posts->user->name}}">{{$posts->user->name}} </a>--}}
    {{--        in--}}
    {{--        <a href="/category/{{$posts->category->slug}}">--}}
    {{--            <strong>{{$posts->category->name}}</strong>--}}
    {{--        </a>--}}
    {{--        <hr>--}}
    {{--    </div>--}}

    {{--    <article>--}}
    {{--        {!!$posts->body!!}--}}
    {{--    </article>--}}

    {{--    <div>--}}
    {{--        <a href="/">Go Back</a>--}}
    {{--    </div>--}}


</x-layout>

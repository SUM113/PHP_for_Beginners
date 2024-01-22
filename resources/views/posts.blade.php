<x-layout>

    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-post-grid :posts="$posts"/>
        @else
        <p class="text-center">No post For Now, comeback Later.</p>
        @endif


    </main>


</x-layout>
{{--@section("content")--}}

{{--    @foreach ($posts as $post)--}}

{{--        <article>--}}

{{--            <h1>--}}
{{--                <a href="/posts/{{$post->slug}}"> {{$post->title}} </a>--}}
{{--            </h1>--}}
{{--            <a href="/category/{{$post->category->slug}}">--}}
{{--                <h5>{{ ($post->category->name)}}</h5>--}}
{{--            </a>--}}
{{--            <div>--}}
{{--                {{ $post->excerpt}}--}}
{{--                <hr>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}


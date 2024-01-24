<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-post-grid :posts="$posts"/>
        @else
            <p class="text-center">No post For Now, comeback Later.</p>
        @endif
        {{$posts->links()}}


    </main>


</x-layout>
{{--@section("content")--}}

{{--    @foreach ($posts as $posts)--}}

{{--        <article>--}}

{{--            <h1>--}}
{{--                <a href="/posts/{{$posts->slug}}"> {{$posts->title}} </a>--}}
{{--            </h1>--}}
{{--            <a href="/category/{{$posts->category->slug}}">--}}
{{--                <h5>{{ ($posts->category->name)}}</h5>--}}
{{--            </a>--}}
{{--            <div>--}}
{{--                {{ $posts->excerpt}}--}}
{{--                <hr>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}


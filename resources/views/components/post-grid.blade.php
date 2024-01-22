@props(['posts'])
@if($posts->count()>1)

    <x-featured-post-card :post="$posts[0]"/>

    <div class="lg:grid lg:grid-cols-2">
        @foreach($posts->skip(1) as $post)
            <x-post-card  :post="$post"/>
        @endforeach
    </div>
@endif

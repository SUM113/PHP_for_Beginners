@props(['trigger'])


<div x-data="{show:false}" @click.away= "show = false">


    {{--trigger--}}
    <div>
        {{$trigger}}
    </div>


    {{--list--}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-32 mt-2 rounded-xl z-50 overflow-auto max-h-4ea0" style="display: none">

      {{$slot}}

    </div>

</div>

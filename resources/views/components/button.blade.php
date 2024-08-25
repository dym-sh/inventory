@props( ['type'] )

<a {{ $attributes->merge(['class'=>'rounded-md bg-gray w-10 h-10 py-2 px-2 border-2 content-center justify-center leading-4 flex']) }}
    ><div class=""
        >{{ $slot }}</div></a>
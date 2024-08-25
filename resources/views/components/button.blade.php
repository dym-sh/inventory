@props(['icon' => 'none', 'type'=>'with-icon'])

@if( 'icon-only' == $type )
    <button {{ $attributes->merge(['class'=>'rounded-md bg-black/5 w-10 h-10 py-2 px-2 border-2 items-center content-center justify-center justify-items-center leading-4 flex']) }}
        >
        <x-icon icon="{{ $icon }}"></x-icon>
        <div class="hidden">{{ $slot }}</div>
    </button>
@elseif( 'with-icon' == $type )
    <button {{ $attributes->merge(['class'=>'rounded-md bg-black/5 h-10 py-2 px-2 border-2 items-center content-center justify-center justify-items-center leading-4 flex space-x-2']) }}
        >
        <x-icon icon="{{ $icon }}"></x-icon>
        <div>{{ $slot }}</div>
    </button>
@endif
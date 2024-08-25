@props( ['variation'=>'text', 'icon' => 'none'] )

@if( 'text' == $variation )
  <a {{ $attributes->merge(['class'=>'rounded-md bg-black/5 w-10 h-10 py-2 px-2 border-2 items-center content-center justify-center justify-items-center leading-4 flex']) }}
    >
    <x-icon icon="{{ $icon }}"></x-icon>
    <div class="">{{ $slot }}</div>
  </a>
@elseif( 'icon-only' == $variation )
  <a {{ $attributes->merge(['class'=>'rounded-md bg-black/5 w-10 h-10 py-2 px-2 border-2 items-center content-center justify-center justify-items-center leading-4 flex']) }}
    >
    <x-icon icon="{{ $icon }}"></x-icon>
    <div class="hidden">{{ $slot }}</div>
  </a>
@endif
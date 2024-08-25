@props(['type'=>'text'])

@if( 'text' == $type )
  <div>
    @if( $attributes['title'] || $attributes['label'] )
      <label for="{{ $attributes['name'] }}">{{ $attributes['title'] }}</label>
    @endif
      <input type="text"
        {{ $attributes->merge(['class'=>'rounded-md bg-white h-10 py-2 px-4 border-2 items-center content-center justify-center justify-items-center leading-4 flex']) }}
        >
  </div>

@elseif( 'search' == $type )
  <div class="space-x-2 flex flex-nowrap">
    <input type="text"
        {{ $attributes->merge(['class'=>'rounded-md bg-white h-10 py-2 px-4 border-2 items-center content-center justify-center justify-items-center leading-4 flex']) }}
        >
    <x-button icon="search">Search...</x-button>
  </div>

@elseif( 'checkbox' == $type )
  <input type="checkbox" {{ $attributes->merge() }}
    ><label for="{{ $attributes['name'] }}">{{ $slot }}</label>

@elseif( 'textarea' == $type )
  <textarea name="" id="" cols="30" rows="10"></textarea>

@endif

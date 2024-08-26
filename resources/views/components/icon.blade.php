@props(['icon' => 'none' ])

@if( 'none' == $icon )
@elseif( 'home' == $icon )
    <i class="fa-solid fa-list-ul"></i>
@elseif( 'calendar' == $icon )
    <i class="fa-regular fa-calendar-days"></i>
@elseif( 'settings' == $icon )
    <i class="fa-solid fa-gear"></i>
@elseif( 'plus' == $icon )
    <i class="fa-solid fa-plus"></i>
@elseif( 'search' == $icon )
    <i class="fa-solid fa-magnifying-glass"></i>
@elseif( 'tag' == $icon )
    <i class="fa-solid fa-hashtag"></i>
@elseif( 'category' == $icon )
    <i class="fa-solid fa-layer-group"></i>
@endif
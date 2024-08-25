<div class="flex space-x-2">
  <section {{ $attributes->merge(['class'=>'rounded-md bg-black/5 py-2 px-2 border-2 content-center justify-center ']) }}
    >
    {{ $slot }}
  </section>

  <aside class="flex flex-col space-y-2">
    <div class="flex space-x-2">
      <x-button type="icon-only" icon="plus">New</x-button>
      <x-button type="icon-only" icon="plus">New</x-button>
    </div>
  </aside>
</div>
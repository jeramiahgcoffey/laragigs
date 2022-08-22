@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach ($tags as $tag)
    <li class="mr-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
      <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
  @endforeach
</ul>

@props(['tag'])
<a href="/tags/{{ strtolower($tag->name) }}"
    class="mt-2 px-1 text-xs font-medium rounded-xl bg-neutral-200 hover:bg-neutral-300 w-fit p-1 transition-colors duration-300">{{
    $tag->name }}</a>
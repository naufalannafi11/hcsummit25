@props ([
    'active' => false
])

<a {{$attributes}} 
class="{{ $active ? 'bg-yellow-600 text-white underline underline-offset-8' : 'text-black hover:bg-yellow-600 hover:text-white'}}
    rounded-md px-3 py-2 text-sm font-medium" aria-current="{{$active ? 'page' : false}}">
    {{$slot}}
</a>
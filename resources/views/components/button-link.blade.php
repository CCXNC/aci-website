@props([
    'url' => '/', 
    'icon' => null,
    'bgClass' => 'bg-blue-800',
    'hoverClass' => 'hover:bg-white hover:text-black hover:border-white',
    'textClass' => 'text-white font-bold border-2 rounded border-blue-800',
    'block' => false
])

<a href="{{$url}}" class="{{$bgClass}} {{$textClass}} {{$hoverClass}} px-4 py-2 rounded hover:shadow-md transition duration-300 {{$block ? 'block' : ''}}">
   @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
   @endif
   {{$slot}}
</a>

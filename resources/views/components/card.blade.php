@props(['addClass' => 'py-4 px-3'])
<div {{$attributes->merge(['class' => 'bg-white overflow-hidden shadow-md sm:rounded-xl '.$addClass])}} >
    {{$slot}}
</div>
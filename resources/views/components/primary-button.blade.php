@props(['variant' => 'primary', 'addClass' => 'px-4 py-3'])

@php
switch ($variant) {
case 'primary':
$customClasses = 'text-white bg-indigo-600 focus:bg-indigo-700 active:bg-indigo-900 hover:bg-indigo-900
focus:ring-indigo-500
text-indigo-600';
break;
case 'ghost':
$customClasses = 'text-indigo-600 bg-slate-50 focus:bg-slate-200 active:bg-slate-300 hover:bg-slate-100
focus:ring-indigo-500 border-indigo-600';
break;
default:
$customClasses = '';
break;
}
@endphp
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center border
    rounded-lg font-bold text-xs uppercase tracking-widest
    focus:outline-none focus:ring-2 focus:ring-offset-2
    transition ease-in-out duration-150 '.$customClasses.' '.$addClass]) }}>
    {{ $slot }}
</button>
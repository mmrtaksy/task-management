@props(['level', 'message'])

@php
    $alertClasses = match($level) {
        'info' => 'bg-blue-100 border border-blue-400 text-blue-700',
        'success' => 'bg-green-100 border border-green-400 text-green-700',
        'warning' => 'bg-yellow-100 border border-yellow-400 text-yellow-700',
        'danger' => 'bg-red-100 border border-red-400 text-red-700',
        default => 'bg-gray-100 border border-gray-400 text-gray-700',
    };
@endphp

<div class="{{ $alertClasses }} px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">{{ ucfirst($level) }}!</strong>
    <span class="block sm:inline">{{ $message }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Kapat</title><path d="M14.348 5.652a1 1 0 00-1.415 0L10 8.586 7.068 5.652a1 1 0 10-1.415 1.415L8.586 10l-2.933 2.933a1 1 0 101.415 1.415L10 11.414l2.933 2.933a1 1 0 001.415-1.415L11.414 10l2.933-2.933a1 1 0 000-1.415z"/></svg>
    </span>
</div>

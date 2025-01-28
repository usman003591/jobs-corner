@props(['error' => false])

@if ($error)
    <small class=" text-red-600 mt-1">{{ $error }}</small>
@endif

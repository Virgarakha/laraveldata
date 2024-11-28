@extends('index')
@section('content')
<div class="w-full flex justify-start m-5">

    <div class="grid grid-cols-2 gap-2">
    @foreach ($link as $a)
        <div class="w-90 h-48">
        <img  src="{{ $a }}" alt="" srcset="" class="rounded-lg object-cover h-full w-full">
    </div>

    @endforeach
    </div>
</div>

@endsection